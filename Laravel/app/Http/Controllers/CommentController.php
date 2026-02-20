<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($postId, $commentId)
    {
        return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
    }
}
