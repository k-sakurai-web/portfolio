// header scroll
var beforePos = 0; //スクロールの値の比較用の設定
var windowHeight = window.innerHeight; // 画面の高さを取得

//トップから50vhスクロールした時にヘッダーを出現させる
function Scroll50vh() {
  // スクロール量を取得
  const scroll = $(window).scrollTop();
  // 画面幅を取得
  var windowWidth = $(window).width();
  // 画面高さを取得
  var windowHeight = $(window).height();

  //ヘッダーの出し入れをする
  if (scroll >= windowHeight) {
    $("#header").addClass("DownMove"); //#headerにDownMoveのクラス名を追加
  } else {
    //ヘッダーが上から出現する
    $("#header").removeClass("DownMove"); //#headerにDownMoveのクラス名つけない
  }
  beforePos = scroll; //現在のスクロール値を比較用のbeforePosに格納
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  Scroll50vh(); //スクロール途中でヘッダーが消え、上にスクロールすると復活する関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  Scroll50vh(); //スクロール途中でヘッダーが消え、上にスクロールすると復活する関数を呼ぶ
});

// 文字順フェードイン トップページの場合
$(document).ready(function () {
  $(".text-container").each(function () {
    var $this = $(this);
    let counter = 0;

    if ($(this).parent().is(".topInner")) {
      // 親要素が.topInnerの場合、アニメーションを繰り返し実行
      const directionAnime = setInterval(() => {
        var content = $this.text(); // コンテナ内のテキストを取得
        $this.html(""); // コンテナをクリア

        for (var i = 0; i < content.length; i++) {
          $("<span />")
            .addClass("char")
            .text(content[i])
            .css("animation-delay", i * 0.3 + "s") // .text-containerの親がh2以外の場合は0.3sの遅延
            .appendTo($this);
        }
        counter++;
        if (counter === 5) {
          clearInterval(directionAnime);
        }
      }, 2000);
    }
  });
});

// 文字順フェードイン h2の場合
$(document).ready(function () {
  $(window).scroll(function () {
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    // h2フェードイン処理
    $("h2").each(function () {
      const $h2 = $(this);
      const target = $h2.offset().top;

      // 既に処理済みであればスキップ
      if ($h2.data("processed")) {
        return;
      }

      if (scroll > target - windowHeight + 300) {
        $h2.css("opacity", "1");
        $h2.data("processed", true); // 処理済みフラグを設定

        $h2.find(".text-container").each(function () {
          const $textContainer = $(this);

          if ($textContainer.parent().is("h2")) {
            // 親要素がh2の場合、処理１回
            var content = $textContainer.text(); // コンテナ内のテキストを取得
            $textContainer.html(""); // コンテナをクリア

            for (var i = 0; i < content.length; i++) {
              // 各文字をspanに
              $("<span />")
                .addClass("char")
                .text(content[i])
                .css("animation-delay", i * 0.2 + "s") // .text-containerの親がh2の場合0.2sの遅延
                .appendTo($textContainer);
            }
          }
        });
      }
    });
  });
});

// fadeIn その場から出現
function fadeIn() {
  $(window).scroll(function () {
    $(".messageBox").each(function () {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > target - windowHeight + 150) {
        $(this).css("opacity", "1");
      }
    });
  });
}
$(window).scroll(function () {
  fadeIn(); /* アニメーション用の関数を呼ぶ*/
});

// fadeInDelay 時間差でその場から出現
function fadeInDelay() {
  $(window).scroll(function () {
    $("#profile").each(function () {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > target - windowHeight + 300) {
        $(".profText").addClass("fadeInDelay");
      }
    });
  });
}

$(window).scroll(function () {
  fadeInDelay(); /* アニメーション用の関数を呼ぶ*/
});

// fadeIn1 +150で下から出現
function fadeIn1Anime() {
  $(window).scroll(function () {
    $(".fadeIn1").each(function () {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > target - windowHeight + 150) {
        $(this).css("opacity", "1");
        $(this).css("transform", "translateY(0)");
      }
    });
  });
}

$(window).scroll(function () {
  fadeIn1Anime(); /* アニメーション用の関数を呼ぶ*/
});

// fadeIn2 +200で下から出現
function fadeIn2Anime() {
  $(window).scroll(function () {
    $(".fadeIn2").each(function () {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > target - windowHeight + 200) {
        $(this).css("opacity", "1");
        $(this).css("transform", "translateY(0)");
      }
    });
  });
}

$(window).scroll(function () {
  fadeIn2Anime(); /* アニメーション用の関数を呼ぶ*/
});

// fadeIn3 +300で下から出現
function fadeIn3Anime() {
  $(window).scroll(function () {
    $(".fadeIn3").each(function () {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > target - windowHeight + 300) {
        $(this).css("opacity", "1");
        $(this).css("transform", "translateY(0)");
      }
    });
  });
}

$(window).scroll(function () {
  fadeIn3Anime(); /* アニメーション用の関数を呼ぶ*/
});

// fadeInFlow その場で出現し左へ流れる
function fadeInFlow() {
  $(window).scroll(function () {
    $("#profile").each(function () {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();
      if (scroll > target - windowHeight + 300) {
        $(".profPic").addClass("fadeInFlow");
      }
    });
  });
}

$(window).scroll(function () {
  fadeInFlow(); /* アニメーション用の関数を呼ぶ*/
});

// slick works
$(document).ready(function () {
  // DOMが完全に読み込まれた後に実行
  $(window).on("load resize", function () {
    $(".thumbnail").slick({
      slidesToShow: 3, // 表示するスライド枚数
      slidesToScroll: 1, // スライドする数
      autoplay: false,
      isfinite: true,
      centerMode: false, // 前後スライドを部分表示
      arrows: true,
      dots: false,
      responsive: [
        {
          breakpoint: 1000,
          settings: {
            centerMode: true,
            centerPadding: '20%',
            slidesToShow: 1,
            arrows: true,
            dots: false,
          }
        }
      ]
    });
  });
});
