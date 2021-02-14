<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoji Stars Rating | CodingNepal</title>
    <link rel="stylesheet" href="style-otziv.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
    <input type="radio" name="rate" id="star-1">
    <input type="radio" name="rate" id="star-2">
    <input type="radio" name="rate" id="star-3">
    <input type="radio" name="rate" id="star-4">
    <input type="radio" name="rate" id="star-5">
    <div class="content">
      <div class="outer">
        <div class="emojis">
          <li class="slideImg"><img src="emojis/emoji-1.png" alt=""></li>
          <li><img src="emojis/emoji-2.png" alt=""></li>
          <li><img src="emojis/emoji-3.png" alt=""></li>
          <li><img src="emojis/emoji-4.png" alt=""></li>
          <li><img src="emojis/emoji-5.png" alt=""></li>
        </div>
      </div>
      <div class="stars">
        <label for="star-1" class="star-1 fas fa-star"></label>
        <label for="star-2" class="star-2 fas fa-star"></label>
        <label for="star-3" class="star-3 fas fa-star"></label>
        <label for="star-4" class="star-4 fas fa-star"></label>
        <label for="star-5" class="star-5 fas fa-star"></label>
      </div>
    </div>
    <div class="footer">
      <span class="text"></span>
      <span class="numb"></span>
    </div>
  </div>

</body>
</html>
