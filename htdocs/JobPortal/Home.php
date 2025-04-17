<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Portal</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Roboto', sans-serif; }
    header {
      background: url('https://via.placeholder.com/1200x600') no-repeat center center/cover;
      height: 100vh;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background-color: rgba(0, 0, 0, 0.5);
    }
    nav a { color: white; margin: 0 15px; text-decoration: none; }
    .btn { padding: 10px 20px; border-radius: 5px; color: white; text-decoration: none; }
    .btn-blue { background-color: #007bff; }
    .btn-green { background-color: #28a745; }
    .hero {
      padding: 50px;
      max-width: 600px;
    }
    .hero h1 { font-size: 48px; font-weight: 700; }
    .hero p { font-size: 24px; margin: 10px 0 30px; }
    .search-box {
      display: flex;
      gap: 10px;
      margin-top: 20px;
    }
    .search-box input, .search-box select {
      padding: 10px;
      border: none;
      border-radius: 5px;
      flex: 1;
    }
    .search-box button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
    }
    .features {
      display: flex;
      justify-content: space-around;
      padding: 50px;
      background-color: white;
    }
    .feature {
      text-align: center;
      max-width: 200px;
    }
    .feature img {
      height: 50px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">JobPortal</div>
      <div>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
        <a href="#" class="btn btn-blue">Post a Job</a>
        <a href="#" class="btn btn-green">Want a Job</a>
      </div>
    </nav>
    <div class="hero">
      <p>We have 850,000 great job offers you deserve!</p>
      <h1>Your Dream <br> Job is Waiting</h1>
      <div class="search-box">
        <input type="text" placeholder="e.g. Graphic, Web Developer">
        <select><option>Category</option></select>
        <input type="text" placeholder="Location">
        <button>Search</button>
      </div>
    </div>
  </header>

  <section class="features">
    <div class="feature">
      <img src="images/recruitment.png" alt="Jobs">
      <h3>Search Millions of Jobs</h3>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
    <div class="feature">
      <img src="https://via.placeholder.com/50" alt="Manage Jobs">
      <h3>Easy To Manage Jobs</h3>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
    <div class="feature">
      <img src="https://via.placeholder.com/50" alt="Careers">
      <h3>Top Careers</h3>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
    <div class="feature">
      <img src="https://via.placeholder.com/50" alt="Candidates">
      <h3>Search Expert Candidates</h3>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
  </section>
</body>
</html>
