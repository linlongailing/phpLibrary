<?php
//opcache_invalidate需要指定缓存失效脚本
echo opcache_invalidate("./test.php",true)?"成功"?"失败";