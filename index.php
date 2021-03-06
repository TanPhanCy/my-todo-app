<!-- <?php include 'core/request.php'; ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>todo_app</title>

  <!--MY CSS  -->
  <link rel="stylesheet" style="text/css" href="style.css">

  <!--MY FONTS  -->
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

  <!--DATEPICKER PLUGIN  -->
  <link rel="stylesheet" href="datepicker/dist/mtr-datepicker.min.css">
  <link rel="stylesheet" href="datepicker/dist/mtr-datepicker.clutterboard-theme.min.css">
</head>

<body>

  <div​ class="main">

  <div class="task_list">

    <div class="main-header">
      <h1>MY TODOLIST</h1>
      <img id="btn1" src="assets/img/plus.svg" alt="button">
    </div>
    <hr width="99%" align="center"/>

    <div​ class="main.container">

    <ul class="list" id="done">

      <li class="list-item">

        <div class="item-inner" >

          <div class="title"><span>Take a shower<span></div>
            <div class="content"></div>
            <div class="infos"></div>
            <ul class="menuaction">
              <li><a href="#">Delete</a></li>
              <li><a href="#">Edit</a></li>
            </ul>
        </div>
      </li>

      <li class="list-item">

        <div class="item-inner" >

          <div class="title"><span>Make my bag<span></div>
            <div class="content"></div>
            <div class="infos"></div>
            <ul class="menuaction">
              <li><a href="#">Delete</a></li>
              <li><a href="#">Edit</a></li>
            </ul>

        </div>
      </li>

      <li class="list-item">

        <div class="item-inner" >

          <div class="title"><span>Take a breakfast<span></div>
            <div class="content"></div>
            <div class="infos"></div>
            <ul class="menuaction">
              <li><a href="#">Delete</a></li>
              <li><a href="#">Edit</a></li>
            </ul>

        </div>
      </li>

    </ul>

    <ul class="list" id="doing">
      <li class="list-item">
      <div class="item-inner">
        <div class="title"><span>Go to bus stop</span></div>
          <ul class="menuaction">
            <li><a href="#">Delete</a></li>
            <li><a href="#">Edit</a></li>
          </ul>
      </div>
      <div class="details">
        <div class="content">My bus arrives at 7:30 I'll be at the station at 7:15</div>
        <div class="infos">Started on: 2/10/2017 - 12:00 End Time: 3/10/2017 - 15:00</div>
      </div>
    </li>
    </ul>

    <hr width="99%" align="center" />

    <ul class="list" id="todo">

      <li class="list-item">

        <div class="item-inner" >

          <div class="title"><span>Be at BeCode on 9:00<span></div>
            <div class="content"></div>
            <div class="infos"></div>
            <ul class="menuaction">

              <li><a href="#">Done</a></li>
              <li><a href="#">Delete</a></li>
              <li><a href="#">Edit</a></li>


            </ul>
        </div>
      </li>

      <li class="list-item">

        <div class="item-inner" >

          <div class="title"><span>Start Coding<span></div>
            <div class="content"></div>
            <div class="infos"></div>
            <ul class="menuaction">

              <li><a href="#">Done</a></li>
              <li><a href="#">Delete</a></li>
              <li><a href="#">Edit</a></li>

            </ul>

        </div>
      </li>

      <li class="list-item">

        <div class="item-inner" >

          <div class="title"><span>I need a BREAK<span></div>
            <div class="content"></div>
            <div class="infos"></div>
            <ul class="menuaction">

              <li><a href="#">Done</a></li>
              <li><a href="#">Delete</a></li>
              <li><a href="#">Edit</a></li>

            </ul>

        </div>
      </li>

    </ul>

    <ul class="list" id="late">

      <li class="list-item">

        <div class="item-inner">

          <div class="title"><span>Go to bus stop</span></div>
          <div class="content"></div>
          <div class="infos"></div>
          <ul class="menuaction">
            <li><a href="#">Done</a></li>
            <li><a href="#">Delete</a></li>
            <li><a href="#">Edit</a></li>
          </ul>
        </div>

      </li>
    </ul>

    <div class="footer"id="hr_footer1">
      <hr>
      <ul id="footer_menu">
        <li>Show <a href="#">All task</a></li>
        <li><a href="#">Todo task</a></li>
        <li><a href="#">Done task</a></li>
      </ul>
    </div>

  </div>
  </div>


<div class="add_task">
  <div class="main-header">
    <h1>MY TODOLIST</h1>
    <img id="btn2" src="assets/img/plus.svg" alt="button">
  </div>
  <hr width="99%" align="center"/>

    <div id="next" class="add-container">
<div class="clear_container">
  <a id="clear" href="#"onclick="ClearFields();">Clear</a>
</div>

    <form id="add">

      <div class="row">
        <label for="add-title">Title</label><br>
        <input value="My TODO Title" onFocus="this.value=''"  type="text" name="add-title" id="add-title">
      </div>
      <hr width="99%" align="center"/>

      <div class="row">
        <label for="add-description">DESCRIPTION</label><br>
        <input value="My todo description" onFocus="this.value=''"type="text" name="add-description" id="add-description">
      </div>
      <hr width="99%" align="center"/>

      <div class="row">
        <label for="add-start-at">START-AT</label><br>
        <input value="December 12, 2 PM" onFocus="this.value=''" type="text" name="add-start-at" id="add-start-at">
      </div>
      <hr width="99%" align="center"/>

      <div class="row">
        <label for="add-end-at">END-AT</label><br>
        <div id="demo"></div>
      </div>

    </form>



    <hr id="hr_footer">
    <div class="footer">
      <ul id="footer_menu">
        <li><a href="#">Add task and create new one</a></li>
        <li><a href="#">Add task</a></li>
      </ul>
    </div>

  </div>
</div>
</div>
<script type="text/javascript" src="datepicker/dist/mtr-datepicker.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
