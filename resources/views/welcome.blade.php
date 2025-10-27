<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YogoSmart | Welcome</title>
  <style>
    /* ====== Reset & Base ====== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #fefefe;
      color: #333;
      overflow: hidden; /* Hide scrollbar during splash */
    }

    /* ====== Splash Screen ====== */
    #splash-screen {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: linear-gradient(135deg, #fefefe 0%, #ffe9e3 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      transition: opacity 0.8s ease;
    }

    #splash-screen img {
      width: 150px;
      animation: float 2s ease-in-out infinite;
    }

    #splash-screen h2 {
      margin-top: 15px;
      font-size: 1.2rem;
      color: #444;
      letter-spacing: 1px;
    }

    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0); }
    }

    /* ====== Main Content ====== */
    #main-content {
      display: none;
      min-height: 100vh;
      background-color: #fff;
      text-align: center;
      padding-top: 100px;
      transition: opacity 1s ease;
    }

    #main-content h1 {
      font-size: 2.5rem;
      color: #ff6b81;
      margin-bottom: 10px;
    }

    #main-content p {
      color: #666;
      font-size: 1rem;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 30px;
      background: #ff6b81;
      color: white;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      font-size: 1rem;
      transition: 0.3s;
    }

    .btn:hover {
      background: #ff3b5c;
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <!-- ====== Splash Screen ====== -->
  <div id="splash-screen">
    <img src="logo.png" alt="YogoSmart Logo">
    <h2>Loading...</h2>
  </div>

  <!-- ====== Main Content ====== -->
  <div id="main-content">
    <h1>Welcome to YogoSmart 🍦</h1>
    <p>Your intelligent frozen yogurt companion</p>
    <button class="btn" onclick="window.location.href='home.php'">Enter Website</button>
  </div>

  <!-- ====== Script ====== -->
  <script>
    window.addEventListener("load", function() {
      const splash = document.getElementById("splash-screen");
      const main = document.getElementById("main-content");

      setTimeout(() => {
        splash.style.opacity = 0;
        setTimeout(() => {
          splash.style.display = "none";
          main.style.display = "block";
          document.body.style.overflow = "auto";
        }, 800); // fade duration
      }, 2000); // splash duration
    });
  </script>

</body>
</html>
