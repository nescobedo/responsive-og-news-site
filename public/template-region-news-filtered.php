
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shale Experts Research Sections</title>

    <!--Begin Head-->
    <?php include("resources/inc/head.php"); ?>
    <!--End Head-->

  </head>

  <body class="body-wrap region-child">

  <!--Begin Header-->
  <?php include("resources/inc/nav.php"); ?>
  <!--End Header-->

  <!--Begin Content-->

 <div id="Region" class="section-block hidden-xs">
    <div class="container">
    <div class="overlay"></div>
      <div class="col-sm-7">
        <div class="row region-nav">
          <div class="col-sm-12 hidden-xs">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="template-region-home.php">Bakken Shale</a></li>
              <li class="active">News</li>
            </ol>
          </div>
        </div>
          <a class="section-title" href="template-region-home.php">Bakken Shale</a>
          <h1>News With Search Options On Left</h1>
      </div>
      <div class="col-sm-5">
          <?php include("resources/inc/region-nav-search.php"); ?>
      </div>
    </div>
  </div>

  <div class="hidden-xs">
 <!--Begin Region Nav-->
  <?php include("resources/inc/region-nav.php"); ?>
  <!--End Region Nav-->
  </div>



  <div id="Region-News-Filtered" class="content pg-padding">
    <div class="container">

        <div class="row">
          <div class="col-sm-4">
            <div class="filter-head">SEARCH FILTERS</div>
            <div class="pad-wrap filter dark">
                <h3 class="cat-title" style="margin-top:0;">Text input</h3>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter company name">
                </div>
                <h3 class="cat-title">Checkboxes</h3>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Option One
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Option Two
                  </label>
                </div>
                <div class="checkbox disabled">
                  <label>
                    <input type="checkbox" value="" disabled>
                    Option three is disabled
                  </label>
                </div>

                <h3 class="cat-title">Radio</h3>
                <label class="radio-inline date-radio">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">7 days
                </label>
                <label class="radio-inline date-radio">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">30 Days
                </label>
                <label class="radio-inline date-radio">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">6 Mo.
                </label>
                <label class="radio-inline date-radio">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">Custom
                </label>
                <h3 class="cat-title">Select Boxes</h3>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <h3 class="cat-title">Select Multiple</h3>
                <select multiple class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <h3 class="cat-title">Main Category</h3>
                <h4 class="cat-sec-title">Subcategory<i class="fa fa-caret-up"></i></h4>
                <ul class="filter-list">
                  <li><label>Item One<input type="checkbox"></label></li>
                  <li><label>Item Two<input type="checkbox"></label></li>
                  <li><label>Item Three<input type="checkbox"></label></li>
                </ul>
                <h4 class="cat-sec-title">Subcategory<i class="fa fa-caret-up"></i></h4>
                <ul class="filter-list">
                  <li><label>Item One<input type="checkbox"></label></li>
                  <li><label>Item Two<input type="checkbox"></label></li>
                  <li><label>Item Three<input type="checkbox"></label></li>
                </ul>
            </div>

          </div>
          <div class="col-sm-8">
            <ul class="news-main">
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                 <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                 <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="#">Company Name</a></div></div>
                 <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name">Company Name</div></div>
                  <div class="slug"></div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug"></div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug"></div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>

            </ul>

              <div class="news-slide-promo row">
                <h4>Trending Data</h4>
                <div class="col-xs-6 col-sm-3">
                  <a class="slide_thumdb" href="#"><img class="img-responsive" src="resources/images/sample-slide.jpg"></a>
                  <a class="company_name" href="#">Chesapeake Energy</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <a class="slide_thumb" href="#"><img class="img-responsive" src="resources/images/sample-slide.jpg"></a>
                  <a class="company_name" href="#">Chesapeake Energy</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <a class="slide_thumb" href="#"><img class="img-responsive" src="resources/images/sample-slide.jpg"></a>
                  <a class="company_name" href="#">Chesapeake Energy</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <a class="slide_thumb" href="#"><img class="img-responsive" src="resources/images/sample-slide.jpg"></a>
                  <a class="company_name" href="#">Chesapeake Energy</a>
                </div>
              </div>
            <ul class="news-main">
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                 <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                 <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="#">Company Name</a></div></div>
                 <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name">Company Name</div></div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug"></div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>
              <li>
                <a href="article.php" class="img"><img class="img-responsive" src="resources/images/img-sq-thumb.png"></a>
                <div class="text-wrapper">
                  <h4><a href="article.php">AWE Limited Hits Total Depth at Perth Basin Well</a></h4>
                  <div class="deck"><div class="date">Jan 12, 2015</div> | <div class="co-name"><a href="article.php">Company Name</a></div></div>
                  <div class="slug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur, doloremque repudiandae! Voluptate numquam eum itaque, expedita culpa voluptatum ratione officia cupiditate fuga, excepturi minus fugiat fugit officiis minima atque!</div>
                  <div class="categories"><a href="#">Lorem</a> | <a href="#">Ipsum</a> | <a href="#">Dolar</a> | <a href="#">Keyword</a> | <a href="#">Category</a></div>
                </div>
              </li>

            </ul>

          </div>
        </div>



    </div> <!-- /.container -->
  </div> <!-- /#Permit -->

  <!--End Content-->


  <!--Begin Footer-->
  <?php include("resources/inc/footer.php"); ?>
  <!--End Footer-->

  <!--Begin Foot-->
  <?php include("resources/inc/foot.php"); ?>
  <!--End Foot-->

  </body>
</html>



