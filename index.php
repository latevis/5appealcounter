<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<div class="container">

	<div class="container">
		<font size="5">811 香港黑暗之夜 事件已過...</font>
	<div class="countup" id="countup8">
		<span class="timeel days">00</span>
		<span class="timeel timeRefDays">日</span>
		<span class="timeel hours">00</span>
		<span class="timeel timeRefHours">時</span><br/>
		<span class="timeel minutes">00</span>
		<span class="timeel timeRefMinutes">分</span>
		<span class="timeel seconds">00</span>
		<span class="timeel timeRefSeconds">秒</span>
		</div>
	</div>
	<hr />
	
	<div class="container">
		<font size="5">727 元朗暴力清場 事件已過...</font>
	<div class="countup" id="countup7">
		<span class="timeel days">00</span>
		<span class="timeel timeRefDays">日</span>
		<span class="timeel hours">00</span>
		<span class="timeel timeRefHours">時</span><br/>
		<span class="timeel minutes">00</span>
		<span class="timeel timeRefMinutes">分</span>
		<span class="timeel seconds">00</span>
		<span class="timeel timeRefSeconds">秒</span>
		</div>
	</div>
	<hr />

<div class="container">
<font size="5">721 元朗恐襲 事件已過...</font>
<div class="countup" id="countup6">
  <span class="timeel days">00</span>
  <span class="timeel timeRefDays">日</span>
  <span class="timeel hours">00</span>
  <span class="timeel timeRefHours">時</span><br/>
  <span class="timeel minutes">00</span>
  <span class="timeel timeRefMinutes">分</span>
  <span class="timeel seconds">00</span>
  <span class="timeel timeRefSeconds">秒</span>
</div></div><hr />

<div class="container">
<font size="5">714 新城市暴力清場 事件已過...</font>
<div class="countup" id="countup5">
  <span class="timeel days">00</span>
  <span class="timeel timeRefDays">日</span>
  <span class="timeel hours">00</span>
  <span class="timeel timeRefHours">時</span><br/>
  <span class="timeel minutes">00</span>
  <span class="timeel timeRefMinutes">分</span>
  <span class="timeel seconds">00</span>
  <span class="timeel timeRefSeconds">秒</span>
</div></div><hr />

<div class="container">
<font size="5">77 旺角之夜 事件已過...</font>
<div class="countup" id="countup4">
  <span class="timeel days">00</span>
  <span class="timeel timeRefDays">日</span>
  <span class="timeel hours">00</span>
  <span class="timeel timeRefHours">時</span><br/>
  <span class="timeel minutes">00</span>
  <span class="timeel timeRefMinutes">分</span>
  <span class="timeel seconds">00</span>
  <span class="timeel timeRefSeconds">秒</span>
</div></div><hr />

<div class="container">
<font size="5">71 立會宣言 事件已過...</font>
<div class="countup" id="countup3">
  <span class="timeel days">00</span>
  <span class="timeel timeRefDays">日</span>
  <span class="timeel hours">00</span>
  <span class="timeel timeRefHours">時</span><br/>
  <span class="timeel minutes">00</span>
  <span class="timeel timeRefMinutes">分</span>
  <span class="timeel seconds">00</span>
  <span class="timeel timeRefSeconds">秒</span>
</div></div><hr />

<div class="container">
<font size="5">616 200萬人上街 事件已過...</font>
<div class="countup" id="countup2">
  <span class="timeel days">00</span>
  <span class="timeel timeRefDays">日</span>
  <span class="timeel hours">00</span>
  <span class="timeel timeRefHours">時</span><br/>
  <span class="timeel minutes">00</span>
  <span class="timeel timeRefMinutes">分</span>
  <span class="timeel seconds">00</span>
  <span class="timeel timeRefSeconds">秒</span>
</div></div><hr />

<div class="container">
<font size="5">69 103萬人遊行 事件已過...</font>
<div class="countup" id="countup1">
  <span class="timeel days">00</span>
  <span class="timeel timeRefDays">日</span>
  <span class="timeel hours">00</span>
  <span class="timeel timeRefHours">時</span><br/>
  <span class="timeel minutes">00</span>
  <span class="timeel timeRefMinutes">分</span>
  <span class="timeel seconds">00</span>
  <span class="timeel timeRefSeconds">秒</span>
</div></div><hr />

</div>
<script language="JavaScript"> 
function myrefresh(){ 
window.location.reload(); 
} 
setTimeout('myrefresh()',1000); //指定1秒刷新一次 
</script> 
<script>
window.onload = function() {
  countUpFromTime("Jun 9, 2019 15:00:00", 'countup1');
  countUpFromTime("Jun 16, 2019 15:00:00", 'countup2');
  countUpFromTime("Jul 1, 2019 20:00:00", 'countup3');
  countUpFromTime("Jul 7, 2019 18:00:00", 'countup4');
  countUpFromTime("Jul 14, 2019 18:00:00", 'countup5');
  countUpFromTime("Jul 21, 2019 18:00:00", 'countup6');
  countUpFromTime("Jul 27, 2019 18:00:00", 'countup7');
  countUpFromTime("Aug 11, 2019 18:00:00", 'countup8');
};
function countUpFromTime(countFrom, id) {
  countFrom = new Date(countFrom).getTime();
  var now = new Date(),
      countFrom = new Date(countFrom),
      timeDifference = (now - countFrom);
    
  var secondsInADay = 60 * 60 * 1000 * 24,
      secondsInAHour = 60 * 60 * 1000;
    
  days = Math.floor(timeDifference / (secondsInADay) * 1);
  hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
  mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
  secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

  var idEl = document.getElementById(id);
  idEl.getElementsByClassName('days')[0].innerHTML = days;
  idEl.getElementsByClassName('hours')[0].innerHTML = hours;
  idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
  idEl.getElementsByClassName('seconds')[0].innerHTML = secs;
}
</script>

<style>
.title {
  margin-bottom: 20px;
}
.countup {
  margin-bottom: 20px;
}
.countup .timeel {
  display: inline-block;
  padding: 10px;
  background: #151515;
  margin: 0;
  color: white;
  min-width: 2.6rem;
  margin-left: 13px;
  border-radius: 10px 0 0 10px;
}
.countup span[class*="timeRef"] {
  border-radius: 0 10px 10px 0;
  margin-left: 0;
  background: #e8c152;
  color: black;
}
</style>