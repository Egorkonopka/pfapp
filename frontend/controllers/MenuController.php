<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Menu;
use frontend\models\Product;
use frontend\models\Info;
// use yii\data\Pagination;
use frontend\models\Res;

class MenuController extends AppController
{
	
    public function actionIndex()
    {


        if(Yii::$app->request->url == '/'){
        $session = Yii::$app->session;
        $session->open();
        $session->set('db','portal_food');
        $res = Res::find()->all();
        }
        // $id = Yii::$app->request->get('id');        
        $this->setMeta('Portal');
     
        return $this->render('index',['res'=>$res]);
        }


    public function actionView($id)
    {   
        $session = Yii::$app->session;
        $session->open();
        $session->set('db',$id);
        $menu = Menu::find()->with('product')->orderBy(['id'=> SORT_ASC])->all();
        $products = Product::find()->orderBy(['id'=> SORT_ASC]);
        $info = Info::findOne(1);
        $this->setMeta('Portal |'. $info->name);
        return $this->render('view', ['menu'=>$menu,'products'=>$products,'info'=>$info]);

    }
}
//               //не используеться {
//     	public function actionViewcat($id)
//     	{	$info = Info::findOne(1);
//     		if(!$id == 0){
//     		$query = Product::find()->where(['category_id'=> $id]);
//     		}else{
//     		$query = Product::find();	
//     		}
//         		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
//         		$catproduct = $query->offset($pages->offset)->limit($pages->limit)->all();
//             $category = Menu::findOne($id);


//     		$this->setMeta($info->name . '|' . $category->name, $category->keywords,$category->description);

//     		return $this->render('viewcat',['catproduct'=>$catproduct,'info'=>$info,'category'=>$category,'pages'=>$pages]);
//     	}
// }           // } не используеться 
