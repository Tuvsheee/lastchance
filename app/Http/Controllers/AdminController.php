<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function destroy($adminId)
    {
        $adminModel = new Admin();

        if ($adminModel->deleteAdmin($adminId)) {
            return redirect()->route('admin.index')->with('success', 'Admin account deleted successfully.');
        } else {
            return redirect()->route('admin.index')->with('error', 'Unable to delete admin account.');
        }
    }
}
