<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        #heig{
             height:10px;
        }
        .color{
             background-color: #E5E5E5;
        }
    </style>
</head>

<body>
    <div class="container">

        <form id="add_form" class=" border p-2">

            <div class="row">
                <label for="title" class="col-sm-2 col-form-label">標題</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name= "title" id="title">
                </div>
                <label for="desc" class="col-sm-2 col-form-label">內文</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="desc" name="desc">
                </div>
                <div class="col-sm-2">
                    <a name="" id="addbtn" class="btn btn-primary" href="#" role="button">新增公告</a>
                </div>
              </div>
        </form>
        <form id="put_form" class=" border p-2">

            <div class="row">
                <label for="title" class="col-sm-1 col-form-label">項次</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" name= "no" id="no">
                </div>
                <label for="title" class="col-sm-1 col-form-label">標題</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" name= "title">
                </div>
                <label for="desc" class="col-sm-1 col-form-label">內文</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="desc">
                </div>
                <div class="col-sm-3">
                    <a name="" id="putbtn" class="btn btn-primary" href="#" role="button">修改公告</a>
                    <a name="" id="delbtn" class="btn btn-primary" href="#" role="button">刪除公告</a>
                </div>
              </div>
        </form>

      <table class="table table-bordered table-condensed">
        <tr>
          <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong>公佈欄</strong></div></td>
        </tr>
        <tr>

          <td>

            {{-- <div class="float-end">

              <button class="btn" type="button">新增公告</button>

              <a name="" id="" class="btn btn-primary" href="backend" role="button">新增公告</a>
            </div> --}}
          </td>
        </tr>
        <tr>
          <td colspan="2"><table class="table table-bordered table-condensed table-striped table-hover text-center">
            <tr>
              <td class="color"><div><strong>項次</strong></div></td>
              <td class="color"><div><strong>標題</strong></div></td>
              <td class="color"><div><strong>內文</strong></div></td>
              <td class="color"><div><strong>時間</strong></div></td>

            </tr>
            @if(isset($boards))
            @foreach ($boards as $board)

            <tr>
                <td><div>{{$board["id"]}}</div></td>
                <td><div>{{$board["title"]}}</div></td>
                <td><div>{{$board["desc"]}}</div></td>
                <td><div>{{date("Y-m-d H:i:s",strtotime($board["created_at"]))}}</div></td>
            </tr>
            @endforeach
            @endif
            {{-- <tr>
              <td><div>1</div></td>
              <td><div>2</div></td>
              <td><div>3</div></td>
              <td><div>4</div></td>
            </tr> --}}
          </table></td>
        </tr>
      </table>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script>
    let HJSHOP_API_BOARD = "api/boards";

    var addBorad = function (data){
        return $.ajax({
            type: "POST",
            data: data,
            url: HJSHOP_API_BOARD,
        });
    }
    var putBorad = function (id, data){
        return $.ajax({
            type: "POST",
            data: data,
            url: HJSHOP_API_BOARD,
        });
    }
    var delBorad = function (id){
        return $.ajax({
            type: "POST",
            data: data,
            url: HJSHOP_API_BOARD,
        });
    }
    $(document).ready(function () {
        $("#title").val("testtilte");
        $("#desc").val("testdesc");
        $("#addbtn").click(function (e) {
            var form = $("#add_form");
            console.log(form.serialize());
            data = form.serialize();
            addBorad(data).done(function(result) {
                console.log(result);
                alert("新增成功");
                location.reload();
            }).fail(function(XMLHttpRequest) {
                console.log("url: " + this.url);
                console.log(XMLHttpRequest);
                // if (XMLHttpRequest.status == 404) {
                //     swal.fire(XMLHttpRequest.responseText);
                // }
                //location.reload();
            });
        });
        $("#putbtn").click(function (e) {
            var form = $("#put_form");
            console.log(form.serialize());
            data = form.serialize();
            if($("#no").val() == "" || $("#no").val() == undefined){
                alert("項次為必填值");
            }
            // addBorad(data).done(function(result) {
            //     console.log(result);
            //     alert("新增成功");
            //     location.reload();
            // }).fail(function(XMLHttpRequest) {
            //     console.log("url: " + this.url);
            //     console.log(XMLHttpRequest);
            //     // if (XMLHttpRequest.status == 404) {
            //     //     swal.fire(XMLHttpRequest.responseText);
            //     // }
            //     //location.reload();
            // });
        });
    });
  </script>
</body>

</html>
