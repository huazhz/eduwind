<?php
/* @var $this NoticeController */
/* @var $data Notice */
$comment = QuestionComment::model()->findByPk($data['commentId']);
if(!$comment) return false;

?>


	<?php echo CHtml::link($comment->user->name,array("/u/index",'id'=>$comment->userId)); echo Yii::t('app','回复了你对');?>
	<?php echo CHtml::link($comment->question->title,array('question/view','id'=>$comment->questionid));?>
	<?php echo Yii::t('app','的评论');?>
