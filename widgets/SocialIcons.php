<?php

namespace derekisbusy\amp\widgets;



class SocialIcons extends \yii\base\Widget
{
    
    public $view = 'social';
    public $head = true;
    
    public function init()
    {
        parent::init();
    }
    
    public function run()
    {
        if ($this->head) {
            Yii::$app->amp->head .= self::head();
        }
        return $this->render($this->view);
    }
    
    public static function head()
    {
        return <<<EOL
<style amp-custom>
.social-ball.fa-facebook{background-color: #4867AA}
.social-ball.fa-twitter{background-color: #00ACED}
.social-ball.fa-linkedin{background-color: #0177B5}
.social-ball.fa-behance{background-color: #010103}
.social-ball.fa-dribbble{background-color: #E04C86}
.social-ball.fa-youtube{background-color: #DD0000}
</style>
EOL;
    }
}