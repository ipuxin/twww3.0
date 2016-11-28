<?php

namespace frontend\controllers;

use Yii;
use common\models\Seller;
use common\models\SellerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SellerController implements the CRUD actions for Seller model.
 */
class SellerController extends Controller
{

    public static  $STATUSPASS=3;
    public static  $STATUERR=4;
    public static  $STATUSWAIT=10;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Seller models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SellerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Seller model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCompany()
    {
        $model = new Seller();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $Person = $model->toArray();

//            var_dump($Person);
//            die();
//            $urlApi = 'http://www.pp.cms/person/receive';
            $urlApi = 'http://twx.pingoing.cn/ajax/CreatShopShenqing';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $urlApi);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_FAILONERROR, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $Person);
            $response = curl_exec($ch);
            curl_close($ch);
            print_r($response);  //打印结果
die();
            return $this->redirect(['wait', 'id' => $model->id]);
        } else {
            return $this->render('company', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Creates a new Seller model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Seller();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {



            return $this->redirect(['wait', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Seller model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['wait', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Seller model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Seller model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Seller the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Seller::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionWait($id)
    {
        // $model=  new Seller();
        $model= $this->findModel($id);
        switch ($model->status ){
            case '':
                return $this->render('Wait');
            case self::$STATUSWAIT:
                return $this->render('Wait');
            case self::$STATUSPASS:
                return $this->render('Wait3');
            case self::$STATUERR:
                return $this->render('wait4');
        }
    }
    public function actions()
    {
        return [
            'upload' => [
                'class' => '\kucha\ueditor\UEditorAction',
                'config' => [
                    //  "imageUrlPrefix"  => "http://www.zgmacd.com/",//图片访问路径前缀
                    "imagePathFormat" => "/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}" //上传保存路径
                ],

            ]
        ];
    }
}
