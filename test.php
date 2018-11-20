<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="assets/css/test.css" rel="stylesheet" type="text/css"/>

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

<div class="container">
  <div class="profile large">
    <div class="cover"><img src="https://source.unsplash.com/random/700x300"/>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
    <div class="user-info">
      <div class="profile-pic"><img src="https://source.unsplash.com/random/300x300"/>
        <div class="layer">
          <div class="loader"></div>
        </div><a class="image-wrapper" href="#">
          <form id="profilePictureForm" action="#">
            <input class="hidden-input" id="changePicture" type="file"/>
            <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
          </form></a>
      </div>
      <div class="username">
        <div class="name"><span class="verified"></span>@John Doe</div>
        <div class="about">Frontend developer and coffee lover</div>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script>
    var PictureUpdate = /** @class */ (function () {
    function PictureUpdate() {
        this.profile = $('.profile-pic'); //direct parent
        this.cover = $('.cover'); //direct parent
        this.updateProfile();
        this.updateCover();
    }
    PictureUpdate.prototype.updateProfile = function () {
        var _this = this;
        var input = $('input', this.profile);
        input.change(function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            _this.fireAJAX(null, img, _this.profile);
        });
    };
    PictureUpdate.prototype.updateCover = function () {
        var _this = this;
        var input = $('input', this.cover);
        input.change(function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            _this.fireAJAX(null, img, _this.cover);
        });
    };
    PictureUpdate.prototype.fireAJAX = function (url, data, element) {
        var _this = this;
        $.ajax({
            type: "POST",
            data: data,
            beforeSend: function () {
                _this.startLoader(element);
            },
            success: function () {
                setTimeout(function () {
                    _this.destroyLoader(element);
                    $('> img', element).attr("src", data);
                }, 2000);
            }
        });
    };
    PictureUpdate.prototype.startLoader = function (element) {
        var loader = $('.layer', element);
        loader.addClass("visible");
    };
    PictureUpdate.prototype.destroyLoader = function (element) {
        var loader = $('.layer', element);
        loader.removeClass("visible");
    };
    return PictureUpdate;
}());
new PictureUpdate();

    </script>
    
  </body>
</html>