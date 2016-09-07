<?

	namespace spbitec\vetassist;
   
   class schedule{
		static function getList($clId, $userId){
			$data=request::get('schedule/getlist', array("clId"=>$clId, "userId"=>$userId));
         return $data;
      }
   }
   