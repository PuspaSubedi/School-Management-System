<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Logout Successful</title>
   <style>
   body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
   }

   .logout-container {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }

   .logout-container h1 {
      color: #28a745;
   }

   .logout-container button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
   }

   .logout-container button:hover {
      background-color: #0056b3;
   }
   </style>
</head>

<body>

   <div class="logout-container">
      <h1>You have been successfully logged out</h1>
      <form action="login.php" method="get">
         <button type="submit">Login Again</button>
      </form>
   </div>

</body>

</html>