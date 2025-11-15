<?php
declare(strict_types=1);

namespace Docbuddy\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

final class FileTypeConvertController extends Controller
{
    public function convert(Request $request): JsonResponse
    {
        return new JsonResponse('you file converted successfully!');
    }
}
