<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
	/**
	 *クイズテータを取得しjson形式で返す
	 */
	public function getQuizAll()
	{
		$quizzes = DB::table('quizzes')
			->select('title', 'image_name', 'correct', 'uncorrect1', 'uncorrect2', 'explain_sentence')
			->where('delete_flg', '=', 0)
			->get();

		return json_encode($quizzes, JSON_UNESCAPED_UNICODE);
	}

	/**
	 * クイズカテゴリーを取得しjson形式で返す
	 */
	public function getQuizCategory()
	{
		$quizCategories = DB::table('categories')
			->select('id', 'name')
			->where('delete_flg', '=', 0)
			->get();

		return json_encode($quizCategories, JSON_UNESCAPED_UNICODE);
	}

	/**
	 * 地域を取得しjson形式で返す
	 */
	public function getRegion()
	{
		$region = DB::table('region')
			->select('id', 'name')
			->where('delete_flg', '=', 0)
			->get();

		return json_encode($region, JSON_UNESCAPED_UNICODE);
	}
}
