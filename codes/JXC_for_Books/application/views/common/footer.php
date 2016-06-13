<footer>
	<p>当前操作用户ID：<?php  $this->load->library('session'); if(isset($_SESSION['id'])) echo $_SESSION['id']; if(isset($_SESSION['username'])) echo "，用户名：".$_SESSION['username']; ?></p>
	<p>版权所有：Elite开发小组</p>
	<p>当前时间：<span id="current_time"></span></p>
</footer>


<script src="/public/js/extra.js"></script>
</div>
</body>
</html>