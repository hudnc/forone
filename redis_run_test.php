<?php
	//�ж�Redis �Ƿ��ڷ���������
	function RedisTest(){
		$token = md5(microtime());
		$redis = new Redis();
		$redis->set('test',$token);
		if($token===$redis->get('test')){
			echo 'Redis running...'
		}else{
			echo 'Redis error...';
		}
		$redis->delete('test');
	}
?>