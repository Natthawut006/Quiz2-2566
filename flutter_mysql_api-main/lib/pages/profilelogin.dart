import 'package:flutter/material.dart';
import 'EditProfile.dart'; // import หน้า EditProfile.dart

class ProfileLogin extends StatelessWidget {
  final String user;

  const ProfileLogin({required this.user});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Profile'),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            const Text(
              'Welcome to your profile,',
              style: TextStyle(fontSize: 18),
            ),
            Text(
              user,
              style: const TextStyle(fontSize: 24, fontWeight: FontWeight.bold),
            ),
            const SizedBox(height: 20),
            ElevatedButton(
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => EditProfile(user: user),
                  ),
                );
              },
              child: const Text('Edit Profile'), // เพิ่มปุ่ม "Edit Profile"
            )
          ],
        ),
      ),
    );
  }
}
