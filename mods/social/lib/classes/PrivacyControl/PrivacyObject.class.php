<?php
/**
 * Simple Privacy Object
 */
class PrivacyObject{
	var $profile_prefs;
	var $search_prefs;
	var $activities_prefs;

	//constructor
	function PrivacyObject(){
		//For now, default PrivacyObject allows all First degree connection to see everything.
		$profile_prefs = array(
								AT_SOCIAL_PROFILE_BASIC			=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_PROFILE_PROFILE		=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_PROFILE_STATUS_UPDATE	=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_PROFILE_MEDIA			=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_PROFILE_CONNECTION	=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_PROFILE_EDUCATION		=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_PROFILE_POSITION		=> array(AT_SOCIAL_FRIENDS_VISIBILITY)								
							  );
		$search_prefs = array(	
								AT_SOCIAL_SEARCH_VISIBILITY	=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_SEARCH_PROFILE	=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_SEARCH_CONNECTION	=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_SEARCH_EDUCATION	=> array(AT_SOCIAL_FRIENDS_VISIBILITY),
								AT_SOCIAL_SEARCH_POSITION	=> array(AT_SOCIAL_FRIENDS_VISIBILITY)
							   );

		//set them
		$this->setProfile($profile_prefs);
		$this->setSearch($search_prefs);
	}


	//Return bitwise representation of the profile privacy settings
	function getProfile(){
		return $this->profile_prefs;
	}

	//Return bitwise representation of the search privacy settings
	function getSearch(){
		return $this->search_prefs;
	}

	//Return bitwise representation of the activity privacy settings
	function getActivity(){
		return $this->activity_prefs;
	}

	/* Set 
	 * @param	mixed	array of profile preferences array
	 */
	function setProfile($prefs){
		$this->profile_prefs = $prefs;
	}

	/*
	 * @param	mixed	array of prefs arrays
	 */
	function setSearch($prefs){
		$this->search_prefs = $prefs;
	}

	function setActivity($prefs){
		$this->activities_prefs = $prefs;
	}
}
?>