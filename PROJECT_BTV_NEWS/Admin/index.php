<?php
  include ('Action/action.php');
  $db = new Action;
  $condition = 'post_id > 0';
  $total_public = $db->countData("tbl_post_news",$condition);
  $post_data = $db->selectData("*","tbl_post_news",$condition,"post_id DESC","0,10");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, 
                   initial-scale=1.0"
    />
    <title>GeeksForGeeks</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/responsive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@100..900&display=swap" rel="stylesheet">
  </head>

  <body>
    <!-- for header part -->
    <header>
      <div class="logosec">
        <div class="logo">BTV NEWS</div>
        <img
          src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
          class="icn menuicn"
          id="menuicn"
          alt="menu-icon"
        />
      </div>

      <div class="searchbar">
        <input type="text" placeholder="Search" />
        <div class="searchbtn">
          <img
            src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
            class="icn srchicn"
            alt="search-icon"
          />
        </div>
      </div>

      <div class="message">
        <div class="circle"></div>
        <img
          src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
          class="icn"
          alt=""
        />
        <div class="dp">
          <img
            src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
            class="dpicn"
            alt="dp"
          />
        </div>
      </div>
    </header>

    <div class="main-container">
      <div class="navcontainer">
        <nav class="nav">
          <div class="nav-upper-options">
            <div class="nav-option option1">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                class="nav-img"
                alt="dashboard"
              />
              <h3>Dashboard</h3>
            </div>

            <div class="option2 nav-option">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                class="nav-img"
                alt="articles"
              />
              <h3>Articles</h3>
            </div>

            <div class="nav-option option3">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                class="nav-img"
                alt="report"
              />
              <h3>Report</h3>
            </div>

            <div class="nav-option option4">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                class="nav-img"
                alt="institution"
              />
              <h3>Institution</h3>
            </div>

            <div class="nav-option option5">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                class="nav-img"
                alt="blog"
              />
              <h3>Profile</h3>
            </div>

            <div class="nav-option option6">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                class="nav-img"
                alt="settings"
              />
              <h3>Settings</h3>
            </div>

            <div class="nav-option logout">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                class="nav-img"
                alt="logout"
              />
              <h3>Logout</h3>
            </div>
          </div>
        </nav>
      </div>
      <div class="main">
        <div class="searchbar2">
          <input type="text" name="" id="" placeholder="Search" />
          <div class="searchbtn">
            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
              class="icn srchicn"
              alt="search-button"
            />
          </div>
        </div>

        <div class="box-container">
          <div class="box box1">
            <div class="text">
              <h2 class="topic-heading">60.5k</h2>
              <h2 class="topic">Article Views</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
              alt="Views"
            />
          </div>

          <div class="box box2">
            <div class="text">
              <h2 class="topic-heading">150</h2>
              <h2 class="topic">Likes</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
              alt="likes"
            />
          </div>

          <div class="box box3">
            <div class="text">
              <h2 class="topic-heading">320</h2>
              <h2 class="topic">Comments</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
              alt="comments"
            />
          </div>
          <div class="box box4">
            <div class="text">
              <h2 class="topic-heading"><?php echo $total_public; ?></h2>
              <h2 class="topic">Active</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png"
              alt="published"
            />
          </div>
        </div>

        <div class="report-container">
          <div class="report-header">
            <h1 class="recent-Articles">Recent Articles</h1>
            <button class="view">View All</button>
          </div>

          <div class="report-body">
            <div class="report-topic-heading">
              <h3 class="t-op">#</h3>
              <h3 class="t-op">Post title</h3>
              <h3 class="t-op">Post Description</h3>
              <h3 class="t-op">Status</h3>
            </div>

            <div class="items">
<?php
          foreach($post_data as $row){
            if($row[5] == 0){
              $status = "Published";
            }elseif($row[5] == 1){
              $status = "Active";
            }
?>
              <div class="item1">
                <h3 class="t-op-nextlvl"><?php echo $row[0] ?></h3>
                <h3 class="t-op-nextlvl"><?php echo substr ($row[1],0,100)?></h3>
                <h3 class="t-op-nextlvl"><?php echo substr ($row[2],0,200) ?></h3>
                <h3 class="t-op-nextlvl label-tag"><?php echo $status ?></h3>
              </div>
<?php
          }
?>
              <!-- <div class="item1">
                <h3 class="t-op-nextlvl">Article 72</h3>
                <h3 class="t-op-nextlvl">1.5k</h3>
                <h3 class="t-op-nextlvl">360</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 71</h3>
                <h3 class="t-op-nextlvl">1.1k</h3>
                <h3 class="t-op-nextlvl">150</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 70</h3>
                <h3 class="t-op-nextlvl">1.2k</h3>
                <h3 class="t-op-nextlvl">420</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 69</h3>
                <h3 class="t-op-nextlvl">2.6k</h3>
                <h3 class="t-op-nextlvl">190</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 68</h3>
                <h3 class="t-op-nextlvl">1.9k</h3>
                <h3 class="t-op-nextlvl">390</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 67</h3>
                <h3 class="t-op-nextlvl">1.2k</h3>
                <h3 class="t-op-nextlvl">580</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 66</h3>
                <h3 class="t-op-nextlvl">3.6k</h3>
                <h3 class="t-op-nextlvl">160</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 65</h3>
                <h3 class="t-op-nextlvl">1.3k</h3>
                <h3 class="t-op-nextlvl">220</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div> -->
            </div>
          </div>
        </div>
        <!-- atical -->
        <div class="manage-container"></div>
      </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
  </body>
</html>
