import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
          body: Column(
        children: [
          Container(
             color: Colors.deepOrange[600],
        margin: EdgeInsets.only(top: 5.0),
        padding: EdgeInsets.only(left: 10, top: 2, right: 10, bottom: 2),
        child: Row(
          children: [
            
            Image.asset('imges/pizza.png',
            width: 100,
            ),
            SizedBox(width: 15,),
            Text('Vegetable Piza',
            style: TextStyle(fontSize: 30 ,
            color: Colors.white,
            fontWeight: FontWeight.bold,
            letterSpacing: 1.0
            ),
            ),
          ],
        ),
          ),

           Container(
             color: Colors.deepOrange[600],
        margin: EdgeInsets.only(top: 5.0),
        padding: EdgeInsets.only(left: 10, top: 2, right: 10, bottom: 2),
        child: Row(
          children: [
            Image.asset('imges/cheese.png',
            width: 100,
            ),
            SizedBox(width: 15,),
            Text('Cheese Piza',
            style: TextStyle(fontSize: 30 ,
            color: Colors.white,
            fontWeight: FontWeight.bold,
            letterSpacing: 1.0
            ),
            ),
          ],
        ),
          ),

          Container(
             color: Colors.deepOrange[600],
        margin: EdgeInsets.only(top: 5.0),
        padding: EdgeInsets.only(left: 10, top: 20, right: 10, bottom: 20),
        child: Row(
          children: [
            Image.asset('imges/box of fries.png',

          
            width: 100,
            ),
            SizedBox(width: 15,),
            Text('Chpps Piza',
            style: TextStyle(fontSize: 30 ,
            color: Colors.white,
            fontWeight: FontWeight.bold,
            letterSpacing: 1.0
            ),
            ),
          ],
        ),
          )
        ],
        
       
        
      ),
      ),
    );
  }
}