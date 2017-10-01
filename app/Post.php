<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class post extends Model
{
    //
   protected $fillable = ['title', 'body', 'body_text', 'category', 'category_id', 'author_name', 'image', 'status', 'tags', 'slug'];
    
     public function category(){
        return $this->belongsTo(Category::class);
    }
	
	public function comments(){
        return $this->hasMany(Comment::class);
    }
	
	public function tags(){
        return $this->belongsToMany(Tag::class);
    }
	//FOR ARCHIVES
	public function scopeFilter($query, $filters) {

		if($month = $filters['month']) {
			$query->whereMonth('created_at', Carbon::parse($month)->month);
		}
		
		if($year = $filters['year']) {
			$query->whereYear('created_at', $year);
		}
		
	}
	
	public static function archives() {
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
			->groupBy('year', 'month')
			->orderByRaw('min(created_at) desc')
			->get()
			->toArray();
	}
	//FOR ARCHIVES
   // public function user(){
     //   return $this->belongsTo(User::class);
  //  }
}
