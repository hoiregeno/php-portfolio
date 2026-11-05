<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geno Hoire</title>
  <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
  <div class="wrapper">
    <header>
      <nav class="navbar">
        <a href="#home" class="navbar__logo">Website</a>
        <button class="btn" id="btn-menu">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="#00ffff"><path d="M3,18V16H21v2H3Zm0-5V11H21v2H3ZM3,8V6H21V8H3Z"/></svg>
        </button>
        <ul class="link-wrapper">
          <li>
            <button class="btn" id="btn-close">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="#00ffff"><path d="M6.4,19L5,17.6L10.6,12L5,6.4L6.4,5L12,10.6L17.6,5L19,6.4L13.4,12L19,17.6L17.6,19L12,13.4L6.4,19Z"/></svg>
            </button>
          </li>
          <li><a href="#home" class="link-wrapper__links">Home</a></li>
          <li><a href="#about" class="link-wrapper__links">About</a></li>
          <li><a href="#projects" class="link-wrapper__links">Projects</a></li>
          <li><a href="#contact" class="link-wrapper__links">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="home" class="hero-content">
        <h1>Hi, I'm Geno Hoire!</h1>
        <h3>Aspiring Full-Stack Engineer</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod id eum temporibus deserunt adipisci. Voluptatem odit blanditiis nesciunt ut in.</p>

        <div class="btn-wrapper">
          <a href="#project" class="btn btn-cta">View Projects</a>
          <a href="#" class="btn btn-cta">Download CV</a>
        </div>
      </section>
      <section id="about">
        <h2>About</h2>
      </section>
      <section id="projects">
        <h2>Projects</h2>
      </section>
      <section id="contact">
        <h2>Contact</h2>
      </section>
    </main>
    <footer>
      <p>&copy; Geno Hoire <span>2026</span>, Copyright Reserved</p>
    </footer>
  </div>
</body>
</html>