<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class LevelModel extends Model
{
    use HasFactory;
    protected $table = "m_level";
    protected $primarykey = "level_id";
    protected $fillable = ['level_id', 'level_kode', 'level_nama'];

    public function users(): HasMany
    {
        // return $this->hasMany(m_user::class);
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}