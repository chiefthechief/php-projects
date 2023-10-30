<?php
session_start();
if(!isset($_SESSION["username"])){
   header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>welcome</title>
   <style>
      *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }
      body section.calculator {
         border: 5px solid;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         padding: 10px;
         display: grid;
         grid-template-columns: repeat(3, 1fr);
         gap: 2em;
      }
      body section.calculator > p{
         padding: 1em;
         background: blue;
         color: white;
         font-size: 1rem;
         text-align: center;
      }
      body section.calculator > p:active{
         transform: scale(0.95);
      }
      body section.calculator > p:hover{
         transform: scale(1.1);
         transition: all 0.25s ease-in-out;
      }
      body section.calculator > p:active{
         transform: scale(0.95);
      }
      body section.calculator > p:first-child{
         grid-column: 1/-1;
      }
      body section.calculator > p:first-child:hover{
         transform: none;
      }
      body section.calculator > p:nth-child(2){
         grid-column: span 2;
      }
   </style>
</head>
<body>
   <section class="calculator">
      <p></p>
      <p>C</p>
      <p>/</p>
      <p>7</p>
      <p>8</p>
      <p>9</p>
      <p>*</p>
      <p>4</p>
      <p>5</p>
      <p>6</p>
      <p>-</p>
      <p>1</p>
      <p>2</p>
      <p>3</p>
      <p>+</p>
      <p>0</p>
      <p>.</p>
      <p>=</p>
   </section>
</body>
</html>