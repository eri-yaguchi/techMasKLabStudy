'use strict';

//タイマー表示
const timer = document.getElementById('timer');

//繰り返し
setInterval(function(){

//現在の時間
  const now = new Date();

//来年の日時
  const nextYear = new Date(
    now.getFullYear() + 1,
    0,
    1,
    0,
    0,
    0
  );

  const diff = nextYear - now;

  const hour = Math.floor(diff / (1000 * 60 * 60));
  const minute = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const second = Math.floor((diff % (1000 * 60)) / 1000);

  timer.textContent =
    '来年まであと「' +
    hour + '時' +
    minute + '分' +
    second + '秒」です。';

}, 1000);