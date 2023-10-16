<?php

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'school' => 'required|exists:schools,id',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $user->schools()->attach($data['school']);

        return response()->json(['message' => 'User registered and associated with a school']);
    }

    public function associateUserWithSchools(User $user, $schoolIds) {
        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Validate school IDs
        $schoolIds = is_array($schoolIds) ? $schoolIds : [$schoolIds];
        foreach ($schoolIds as $schoolId) {
            if (!School::find($schoolId)) {
                return response()->json(['message' => 'One or more schools do not exist'], 400);
            }
        }

        // Attach the user to the specified schools
        $user->schools()->attach($schoolIds);

        return response()->json(['message' => 'User associated with school(s)']);
    }
}
