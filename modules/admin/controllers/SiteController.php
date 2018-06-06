<?php

namespace app\modules\admin\controllers;


use app\models\TireFilterModel;
use app\models\DiskFilterModel;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Table168;
use app\models\Table225;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $hits = Table168::find()->where(['p_4' => '18"'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }


    public function actionTireParam()
    {
         // Пагинация
        $hits = Table168::find()->andWhere(['cat_id' => '168']);
            if(empty($this)){
                throw new \yii\web\HttpException(404, 'Такой категории нет.');
            }

        $model_t = new TireFilterModel();
        if ($model_t->load(Yii::$app->request->post()) && $model_t->validate()) {
            if( $model_t->width ){
                $hits->andWhere('p_3=:p_3', [':p_3'=>$model_t->width.' мм']);
            }
            if( $model_t->height ){
                $hits->andWhere('p_5=:p_5', [':p_5'=>$model_t->height.' %']);
            }
            if( $model_t->diameter ){
                $hits->andWhere('p_4=:p_4', [':p_4'=>$model_t->diameter.'"']);
            }
            if( $model_t->season ){
                $hits->andWhere('p_2=:p_2', [':p_2'=>$model_t->season]);
            }
            if( $model_t->manufacturer ){
                $hits->andWhere('vendor=:vendor', [':vendor'=>$model_t->manufacturer]);
            }
        }


        $pages = new Pagination(['totalCount' => $hits->count(),'pageSize' => 12, 'forcePageParam' => false,'pageSizeParam' => false]);
        $tires = $hits->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('tire-param', compact('tires','hits','pages', 'model_t','productTire'));

    }


    public function actionDiskParam()
    {
        $hits = Table225::find()->andWhere(['cat_id' => '225']);
        if(empty($this)){
            throw new \yii\web\HttpException(404, 'Такой категории нет.');
        }

        $model_d = new DiskFilterModel();
        if ($model_d->load(Yii::$app->request->post()) && $model_d->validate()) {
            if( $model_d->disk_type ){
                $hits->andWhere('p_8=:p_8', [':p_8'=>$model_d->disk_type]);
            }
            if( $model_d->diameter ){
                $hits->andWhere('p_7=:p_7', [':p_7'=>$model_d->diameter.'"']);
            }
            if( $model_d->mount ){
                $hits->andWhere('p_1=:p_1', [':p_1'=>$model_d->mount]);
            }
            if( $model_d->distance ){
                $hits->andWhere('p_4=:p_4', [':p_4'=>$model_d->distance.' мм']);
            }
            if( $model_d->width ){
                $hits->andWhere('p_6=:p_6', [':p_6'=>$model_d->width.'"']);
            }
            if( $model_d->vilet ){
                $hits->andWhere('p_3=:p_3', [':p_3'=>$model_d->vilet.' мм']);
            }
            if( $model_d->manufacturer ){
                $hits->andWhere('vendor=:vendor', [':vendor'=>$model_d->manufacturer]);
            }

//            echo '<pre>';
//            print_r($model_d);
//            exit();

        }


        $pages = new Pagination(['totalCount' => $hits->count(),'pageSize' => 12, 'forcePageParam' => false,'pageSizeParam' => false]);
        $disks = $hits->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('disk-param', compact('disks','pages', 'model_d'));
    }


    public function actionDelivery()
    {
        $this->view->title = 'Доставка';
        return $this->render('delivery');
    }
    public function actionPayment()
    {
        $this->view->title = 'Оплата';
        return $this->render('payment');
    }
    public function actionCont()
    {
        $this->view->title = 'Контакты';
        return $this->render('cont');
    }




}
