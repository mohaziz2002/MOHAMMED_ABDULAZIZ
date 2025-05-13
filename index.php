<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>






<?php

$name       = "Mohammed Zaki Ali Mohammed Abdulaziz";
$headline   = "Computer Engineering Student";
$objective  = "Motivated Computer Engineering student with a passion for software development and emerging technologies.";

$info = [
    ['icon'=>'📍', 'label'=>'Address',    'value'=>'Karabük, Merkez'],
    ['icon'=>'📞', 'label'=>'Phone',      'value'=>'+90 535 664 8870'],
    ['icon'=>'📧', 'label'=>'Email',      'value'=>'<a href="mailto:mohaziz7300@gmail.com">mohaziz7300@gmail.com</a>'],
    ['icon'=>'🔗', 'label'=>'LinkedIn',   'value'=>'<a href="https://www.linkedin.com/in/mohammed-aziz-0bb94b264/" target="_blank">mohammed-aziz-0bb94b264</a>'],
    ['icon'=>'🎂', 'label'=>'Birthdate',  'value'=>'June 10, 2002'],
    ['icon'=>'🗺️', 'label'=>'Nationality','value'=>'Yemen 🇾🇪'],
];

$education = [
    ['degree'=>'B.Sc. Computer Engineering', 'institution'=>'Karabük University', 'year'=>'Expected 2027']
];

$languages = [
    ['flag'=>'🇬🇧','lang'=>'English', 'level'=>'B2'],
    ['flag'=>'🇸🇦','lang'=>'Arabic',  'level'=>'Native'],
    ['flag'=>'🇹🇷','lang'=>'Turkish', 'level'=>'B1'],
];


$contactMsg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender   = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $message  = htmlspecialchars($_POST['message']);

    $contactMsg = "Thanks, <strong>{$sender}</strong>! Your message has been received.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $name ?> – Résumé</title>
  <meta name="description" content="Résumé of <?= $name ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <img src="2310213507.jpg" alt="Photo of <?= $name ?>">

  <h1><?= $name ?></h1>
  <p class="headline"><?= $headline ?></p>

  <ul class="info">
    <?php foreach ($info as $item): ?>
      <li>
        <?= $item['icon'] ?> <strong><?= $item['label'] ?>:</strong>
        <?= $item['value'] ?>
      </li>
    <?php endforeach; ?>
  </ul>

  <h2>🎯 Objective</h2>
  <p><?= $objective ?></p>

  <h2>🎓 Education</h2>
  <?php foreach ($education as $edu): ?>
    <p><strong><?= $edu['degree'] ?></strong> – <?= $edu['institution'] ?> (<?= $edu['year'] ?>)</p>
  <?php endforeach; ?>

  <h2>🌍 Languages</h2>
  <ul>
    <?php foreach ($languages as $lang): ?>
      <li><?= $lang['flag'] ?> <strong><?= $lang['lang'] ?>:</strong> <?= $lang['level'] ?></li>
    <?php endforeach; ?>
  </ul>

  <h2 id="contact">✉️ Contact Me</h2>
  <?php if ($contactMsg): ?>
    <p class="thank-you"><?= $contactMsg ?></p>
  <?php else: ?>
    <form id="contactForm" method="post" action="#contact">
      <input type="text"  name="name"    placeholder="Your Name"    required>
      <input type="email" name="email"   placeholder="Your Email"   required>
      <textarea name="message" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  <?php endif; ?>

  <button id="themeToggle">Toggle Dark Mode</button>

  <script src="script.js"></script>
</body>
</html>
