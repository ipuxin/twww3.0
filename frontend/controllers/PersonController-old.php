<?php

namespace frontend\controllers;

use Yii;
use common\models\Person;
use common\models\PersonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonController implements the CRUD actions for Person model.
 */
class PersonController extends Controller
{

    public static $STATUSPASS = 3;
    public static $STATUERR = 4;
    public static $STATUSWAIT = 10;

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
     * Lists all Person models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PersonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Person model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Person model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Person();

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
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Creates a new Person model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCa()
    {
//        $uri = "http://www.pp.cms/b.php";
        $uri = "http://www.pp.cms/person/receive";

        $data = array(
            'name' => '+http://www.ping.cms/person/ca|',
            'age' => '11',
        );

        $ch = curl_init();
        print_r($ch);
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_exec($ch);
        $return = curl_exec($ch);
        curl_close($ch);

        print_r($return);
//        echo '<hr><br>  接受php页面远程服务器： ';
        echo '<hr><br> 请求地址： ' . $uri;

    }

    /**
     * Updates an existing Person model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //   return $this->redirect(['view', 'id' => $model->id]);
            return $this->redirect(['wait', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    public function actionWait($id)
    {
        $model = new Person();
        $model = $this->findModel($id);
        switch ($model->status) {
            case self::$STATUSWAIT:
                return $this->render('Wait');
            case self::$STATUSPASS:
                return $this->render('Wait3');
            case self::$STATUERR:
                return $this->render('wait4');
        }
    }

    /**
     * Deletes an existing Person model.
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
     * Finds the Person model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Person the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Person::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
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
