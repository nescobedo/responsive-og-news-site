
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

  <body class="body-wrap">

  <!--Begin Header-->
    <?php include("resources/inc/header.php"); ?>
    <?php include("resources/inc/nav.php"); ?>
  <!--End Header-->


  <!--Begin Slide Overlay -->
  <?php include("resources/inc/overlay.php"); ?>
  <!--End Slide Overlay -->

  <!--Begin Content-->

  <div id="Research" class="content">
    <div class="container">

      <div id="re-searchbar" class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-9">
<!--             <form id="re-search" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Enter Tags">
                  <span class="input-group-btn">
                    <button class="btn btn-primary btn-research" type="button"><div class="visible-xs"><i class="fa fa-search"></i></div><div class="hidden-xs">SEARCH</div></button>
                  </span>
                </div>
            </form> -->
                <form id="re-search"  role="search">
            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Enter Tags">
                    </div>
                    <div class="col-sm-3">
                      <!-- <span class="input-group-btn"> -->
                        <button class="btn btn-primary btn-research btn-block" type="button"><div class="visible-xs"><i class="fa fa-search"></i></div><div class="hidden-xs">SEARCH</div></button>
    <!--                   </span> -->
                    </div>
                </div>
              </div>
            </div>
                </form>



        </div>
      </div>

      <div id="re-filter" class="row">
        <div class="col-sm-3 filter-col hidden-xs">
          <div class="filter-head">
 FILTER RESULTS</div>


          <h3 class="cat-title" style="margin-top:0;">Company</h3>
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter company name">
          </div>

          <h3 class="cat-title">Date Range</h3>
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

          <h3 class="cat-title">Categories</h3>

          <h4 class="cat-sec-title">Acquistions &amp; Divestitures<i class="fa fa-caret-up"></i></h4>
          <ul class="filter-list">
            <li><label>Acquistions &amp; Mergers <span class="yellow">(5)</span><input type="checkbox"></label></li>
            <li><label>Drilling Efficiency <span class="yellow">(722)</span><input type="checkbox"></label></li>
            <li><label>Wells: Key Wells <span class="yellow">(2)</span><input type="checkbox"></label></li>
          </ul>

          <h4 class="cat-sec-title">Capital Markets<i class="fa fa-caret-up"></i></h4>
          <ul class="filter-list">
            <li><label>Acquistions &amp; Mergers <span class="yellow">(5)</span><input type="checkbox"></label></li>
            <li><label>Drilling Efficiency <span class="yellow">(722)</span><input type="checkbox"></label></li>
            <li><label>Wells: Key Wells <span class="yellow">(2)</span><input type="checkbox"></label></li>
          </ul>

          <h4 class="cat-sec-title">Data &amp; Graphics<i class="fa fa-caret-up"></i></h4>
          <ul class="filter-list">
            <li><label>Acquistions &amp; Mergers <span class="yellow">(5)</span><input type="checkbox"></label></li>
            <li><label>Drilling Efficiency <span class="yellow">(722)</span><input type="checkbox"></label></li>
            <li><label>Wells: Key Wells <span class="yellow">(2)</span><input type="checkbox"></label></li>
          </ul>

          <h4 class="cat-sec-title">Land &amp; Legal<i class="fa fa-caret-up"></i></h4>
          <ul class="filter-list">
            <li><label>Acquistions &amp; Mergers <span class="yellow">(5)</span><input type="checkbox"></label></li>
            <li><label>Drilling Efficiency <span class="yellow">(722)</span><input type="checkbox"></label></li>
            <li><label>Wells: Key Wells <span class="yellow">(2)</span><input type="checkbox"></label></li>
          </ul>

          <h4 class="cat-sec-title">Maps<i class="fa fa-caret-up"></i></h4>
          <ul class="filter-list">
            <li><label>Acquistions &amp; Mergers <span class="yellow">(5)</span><input type="checkbox"></label></li>
            <li><label>Drilling Efficiency <span class="yellow">(722)</span><input type="checkbox"></label></li>
            <li><label>Wells: Key Wells <span class="yellow">(2)</span><input type="checkbox"></label></li>
          </ul>

          <h4 class="cat-sec-title">Midstream &amp; Infrastructure<i class="fa fa-caret-down"></i></h4>

          <h4 class="cat-sec-title">Page Classification<i class="fa fa-caret-down"></i></h4>

          <h4 class="cat-sec-title">Portfolio &amp; Operations<i class="fa fa-caret-down"></i></h4>

          <h4 class="cat-sec-title">Pricing &amp; Hedging<i class="fa fa-caret-down"></i></h4>

          <h4 class="cat-sec-title">Production<i class="fa fa-caret-down"></i></h4>

          <h4 class="cat-sec-title">Prospects &amp; Geology<i class="fa fa-caret-down"></i></h4>

          <h3 class="cat-title">Company List</h3>
          <ul class="filter-list">
            <li><label>3legs Resources (59) <input type="checkbox"></label></li>
            <li><label>A.Schulman Inc. (115) <input type="checkbox"></label></li>
            <li><label>Abb Oil Company (66) <input type="checkbox"></label></li>
            <li><label>Abraxas Petroleum Corp. (1150) <input type="checkbox"></label></li>
            <li><label>Access Midstream Partners, L.P. (467) <input type="checkbox"></label></li>
            <li><label>Acergy Sa (77) <input type="checkbox"></label></li>
          </ul>


        </div>
        <div class="col-sm-9">

          <div id="slide-manager">

              <div class="row">
                <div class="col-sm-12">
                <div class="view-controls">
                  <div class="row">
                      <div class="col-sm-7 mob-center-left">
                        <strong>Slides:</strong> 457,984 &nbsp;&nbsp;<strong>Presentations:</strong> 15,290
                      </div>
                      <div class="col-sm-5 mob-center-right">
 <!--                        <div class="buttons">
                            <button class="grid btn btn-sm btn-primary"><i class="fa fa-th-large"></i> Presentations</button>
                            <button class="list btn btn-sm btn-primary inactive"><i class="fa fa-list"></i> Slides</button>
                        </div> -->
                      </div>
                  </div>
                </div>
                </div>

              </div>
        <!--       <div class="filter-title">
 SEARCH RESULTS&nbsp; &nbsp;  <i class="fa fa-spinner fa-pulse"></i></div> -->
              <div id="slide-wrapper" class="row preview">


                  <div class="pres-item">
                    <div class="row">
                        <div class="col-sm-9 mob-center-left">
                          <a class="presentation_name" href="#"  onclick='overlay()'>November 2009 Corporate Presentation</a> <a class="slide_total" href="#" onclick='overlay()'>Contains 20 Slides</a>
                          <a class="company_name" href="#">Chesapeake Energy</a> - <a class="presentation_date" href="#">May 20th, 2015</a>  - Presentation
                        </div>
                        <div class="col-sm-3 mob-center-right">
                          <a class="btn_download" href="#">Download</a>
                        </div>
                    </div>
                    <div class="slide-scroller">
                      <div class="carousel-nav left-button"><i class="fa fa-angle-left"></i></div>
                      <div class="carousel-nav right-button"><i class="fa fa-angle-right"></i></div>
                       <a class="slide_thumb" href="#" onclick='overlay()'><img src="resources/images/sample-slide.jpg" /><div class="page_number">1</div></a>
                       <a class="slide_thumb" href="#" onclick='overlay()'><img src="resources/images/sample-slide.jpg" /><div class="page_number">2</div></a>
                       <a class="slide_thumb" href="#" onclick='overlay()'><img src="resources/images/sample-slide.jpg" /><div class="page_number">3</div></a>
                       <a class="slide_thumb" href="#" onclick='overlay()'><img src="resources/images/sample-slide.jpg" /><div class="page_number">4</div></a>
                       <a class="slide_thumb" href="#" onclick='overlay()'><img src="resources/images/sample-slide.jpg" /><div class="page_number">5</div></a>
                       <a class="slide_thumb" href="#" onclick='overlay()'><img src="resources/images/sample-slide.jpg" /><div class="page_number">6</div></a>
                       <a class="slide_thumb" href="#" onclick='overlay()'><img src="resources/images/sample-slide.jpg" /><div class="page_number">7</div></a>
                    </div>
                  </div>


                  <div class="pres-item">
                    <div class="row">
                        <div class="col-sm-9 mob-center-left">
                          <a class="presentation_name" href="#"  onclick='overlay()'>November 2009 Corporate Presentation</a> <a class="slide_total" href="#" onclick='overlay()'>Contains 2 Slides</a>
                          <a class="company_name" href="#">Chesapeake Energy</a> - <a class="presentation_date" href="#">May 20th, 2015</a>  - Presentation
                        </div>
                        <div class="col-sm-3 mob-center-right">
                          <a class="btn_download" href="#">Download</a>
                        </div>
                    </div>
                    <div class="slide-scroller">
                      <div class="carousel-nav left-button"><i class="fa fa-angle-left"></i></div>
                      <div class="carousel-nav right-button"><i class="fa fa-angle-right"></i></div>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">1</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">2</div></a>
                    </div>
                  </div>


                  <div class="pres-item">
                    <div class="row">
                        <div class="col-sm-9 mob-center-left">
                          <a class="presentation_name" href="#"  onclick='overlay()'>November 2009 Corporate Presentation</a> <a class="slide_total" href="#" onclick='overlay()'>Contains 3 Slides</a>
                          <a class="company_name" href="#">Chesapeake Energy</a> - <a class="presentation_date" href="#">May 20th, 2015</a>  - Presentation
                        </div>
                        <div class="col-sm-3 mob-center-right">
                          <a class="btn_download" href="#">Download</a>
                        </div>
                    </div>
                    <div class="slide-scroller">
                      <div class="carousel-nav left-button"><i class="fa fa-angle-left"></i></div>
                      <div class="carousel-nav right-button"><i class="fa fa-angle-right"></i></div>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">1</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">2</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">3</div></a>
                    </div>
                  </div>


                  <div class="pres-item">
                    <div class="row">
                        <div class="col-sm-9 mob-center-left">
                          <a class="presentation_name" href="#"  onclick='overlay()'>November 2009 Corporate Presentation</a> <a class="slide_total" href="#" onclick='overlay()'>Contains 1 Slides</a>
                          <a class="company_name" href="#">Chesapeake Energy</a> - <a class="presentation_date" href="#">May 20th, 2015</a>  - Presentation
                        </div>
                        <div class="col-sm-3 mob-center-right">
                          <a class="btn_download" href="#">Download</a>
                        </div>
                    </div>
                    <div class="slide-scroller">
                      <div class="carousel-nav left-button"><i class="fa fa-angle-left"></i></div>
                      <div class="carousel-nav right-button"><i class="fa fa-angle-right"></i></div>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">1</div></a>
                    </div>
                  </div>

                  <div class="pres-item">
                    <div class="row">
                        <div class="col-sm-9 mob-center-left">
                          <a class="presentation_name" href="#"  onclick='overlay()'>November 2009 Corporate Presentation</a> <a class="slide_total" href="#" onclick='overlay()'>Contains 20 Slides</a>
                          <a class="company_name" href="#">Chesapeake Energy</a> - <a class="presentation_date" href="#">May 20th, 2015</a>  - Presentation
                        </div>
                        <div class="col-sm-3 mob-center-right">
                          <a class="btn_download" href="#">Download</a>
                        </div>
                    </div>
                    <div class="slide-scroller">
                      <div class="carousel-nav left-button"><i class="fa fa-angle-left"></i></div>
                      <div class="carousel-nav right-button"><i class="fa fa-angle-right"></i></div>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">1</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">2</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">3</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">4</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">5</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">6</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">7</div></a>
                    </div>
                  </div>


                  <div class="pres-item">
                    <div class="row">
                        <div class="col-sm-9 mob-center-left">
                          <a class="presentation_name" href="#"  onclick='overlay()'>November 2009 Corporate Presentation</a> <a class="slide_total" href="#" onclick='overlay()'>Contains 20 Slides</a><br>
                          <a class="company_name" href="#">Chesapeake Energy</a> - <a class="presentation_date" href="#">May 20th, 2015</a>  - Presentation
                        </div>
                        <div class="col-sm-3 mob-center-right">
                          <a class="btn_download" href="#">Download</a>
                        </div>
                    </div>
                    <div class="slide-scroller">
                      <div class="carousel-nav left-button"><i class="fa fa-angle-left"></i></div>
                      <div class="carousel-nav right-button"><i class="fa fa-angle-right"></i></div>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">1</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">2</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">3</div></a>
                       <a class="slide_thumb" href="#"><img src="resources/images/sample-slide.jpg" /><div class="page_number">4</div></a>
                    </div>
                  </div>

                <div class="clearfix"></div>
                <div class="hr-light"></div>
                <nav class="mob-center-right">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>

              </div> <!-- /#slide-wrapper -->
          </div> <!-- /#slide-manager -->


        </div> <!-- /.col-sm-9 -->
      </div> <!-- /#re-filter.row -->

    </div> <!-- /.container -->
  </div> <!-- /#Research -->

  <!--End Content-->


  <!--Begin Footer-->
  <?php include("resources/inc/footer.php"); ?>
  <!--End Footer-->

  <!--Begin Foot-->
  <?php include("resources/inc/foot.php"); ?>
  <!--End Foot-->

  </body>
</html>



