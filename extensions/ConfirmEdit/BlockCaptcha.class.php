<?php

class BlockCaptcha extends SimpleCaptcha {
	/**
	 * Check if the submitted form matches the captcha session data provided
	 * by the plugin when the form was generated.
	 *
	 * @param string $answer
	 * @param array $info
	 * @return bool
	 */
	function keyMatch( $answer, $info ) {
		return false;
	}

	function addCaptchaAPI(&$resultArr) {
		$captcha = $this->getCaptcha();
                $index = $this->storeCaptcha( $captcha );
                $resultArr['captcha']['type'] = 'simple';
                $resultArr['captcha']['mime'] = 'text/plain';
                $resultArr['captcha']['id'] = $index;
                $resultArr['captcha']['question'] = $captcha['question'];
	}

	/**
	 * Insert the captcha prompt into the edit form.
	 */
	function getForm() {
		return false;
	}

	/**
	 * Show a message asking the user to enter a captcha on edit
	 * The result will be treated as wiki text
	 *
	 * @param $action Action being performed
	 * @return string
	 */
	function getMessage( $action ) {
		$name = 'blockcaptcha-' . $action;
		$text = wfMsg( $name );
		# Obtain a more tailored message, if possible, otherwise, fall back to
		# the default for edits
		return wfEmptyMsg( $name, $text ) ? wfMsg( 'blockcaptcha-edit' ) : $text;
	}

}
