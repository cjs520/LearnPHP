
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">

        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>


    <div id="templatemo_container">

        <div id="templatemo_header">
            <div id="website_title">

            </div>
        </div> <!-- end of header -->

        <div id="templatemo_menu">
            <ul>

            </ul>
        </div>    <!-- end of menu -->

        <div id="templatemo_content_wrapper">

            <div id="templatemo_content">

                <center><h2 >留言板</h2></center>


                <div class="cleaner_h10">&nbsp;</div>
                <div class="horizontal_divider_01">&nbsp;</div>
                <form  method="post" name="myform" onsubmit="return CheckPost();">
                    <div >
                        <center>
                            <div >
                                <label>标题：</label>
                                <input type="text" name="title" placeholder="请输入标题">
                            </div>
                        </center>
                    </div>

                    <div >
                        <center>
                            <label >内容：</label>
                            <div >
           <textarea type="password"  name="content" cols="60" rows="9"
                     placeholder="请输入内容"></textarea>
                            </div>
                        </center>

                    </div>

                    <div >
                        <center>
                            <div >
                                <button type="submit" name="submit" >发布留言</button>
                                <button type="button" name="exit" onclick="return ex()">退出</button>
                                <button type="button" name="show"  onclick="return showms()">查看留言</button>
                            </div>

                        </center>

                    </div>
                </form>
                <div class="cleaner_h30">&nbsp;</div>








            </div>

        </div> <!-- end of content wrapper -->

        <div id="templatemo_footer">


        </div> <!-- end of footer -->
    </div> <!-- end of container -->
    </body>
    </html>

    <script language="JavaScript">
        function CheckPost() {

            if (myform.title.value.length < 3) {
                alert("标题不能少于3个字符");
                myform.title.focus();
                return false;
            }
            if (myform.content.value == "") {
                alert("必须填写留言内容")
                myform.content.focus();
                return false;
            }
        };
        function ex() {

            location.href="index.php?m=login";
        };
        function showms() {
            location.href = "index.php?m=list";

        };
    </script>