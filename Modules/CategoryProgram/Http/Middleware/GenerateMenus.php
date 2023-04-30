<?php

namespace Modules\CategoryProgram\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        
        // \Menu::make('admin_sidebar', function ($menu) {
        //     // Articles Dropdown<i class="fas fa-tree-large"></i>
        //     $articles_menu = $menu->add('<i class="nav-icon fas fa-tree"></i> '.__('Master Data'), [        'class' => 'nav-group',])->data([        'order' => 81,        'activematches' => [                'admin/posts*',                'admin/categories*',        ],
        //         'permission' => ['view_posts', 'view_categories'],
        //     ]);
        //     $articles_menu->link->attr([        'class' => 'nav-link nav-group-toggle',        'href' => '#',]);
                        
        // // Submenu: Master Data - Event & Program<i class="fas fa-thumbtack"></i>
        //     $posts_submenu = $articles_menu->add('<i class="nav-icon fas fa-thumbtack"></i> '.__('Event & Program'), [
        //         'class' => 'nav-item nav-group',
        //     ])->data([
        //         'order' => 82,
        //         'activematches' => 'admin/posts*',
        //         'permission' => ['edit_posts'],
        //     ]);
        //     $posts_submenu->link->attr([        'class' => 'nav-link nav-group-toggle',        'href' => '#',]);
                        
        //     // Submenu: Event & program - Category Event<i class="fas fa-suitcase"></i><i class="fas fa-mountains"></i>
        //     $category_event_submenu = $posts_submenu->add('<i class="nav-icon fas fa-map-marked"></i> '.__('Master Event'), [
        //         'class' => 'nav-item nav-group',
        //     ])->data([
        //         'order' => 83,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ]);
        //     $category_event_submenu->link->attr([    'class' => 'nav-link nav-group-toggle',    'href' => '#',]);

        //     // Submenu: Category Event - Index
        //     $category_event_submenu->add('<i class="nav-icon "></i> '.__('Event'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])->data([
        //         'order' => 84,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])->link->attr([
        //         'class' => 'nav-link',
        //     ]);

        //     // Submenu: Category Event - Index
        //     $category_event_submenu->add('<i class="nav-icon "></i> '.__('Category Event'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])->data([
        //         'order' => 84,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])->link->attr([
        //         'class' => 'nav-link',
        //     ]);


        //     // Submenu: Event & program - Category Event<i class="fas fa-binoculars"></i>
        //     $category_event_submenu = $posts_submenu->add('<i class="nav-icon fas fa-binoculars"></i> '.__('Master Program'), [
        //         'class' => 'nav-item nav-group',
        //     ])->data([
        //         'order' => 83,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ]);
        //     $category_event_submenu->link->attr([    'class' => 'nav-link nav-group-toggle',    'href' => '#',]);

        //     // Submenu: Category Event - Index
        //     $category_event_submenu->add('<i class="nav-icon "></i> '.__('Program'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])->data([
        //         'order' => 84,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])->link->attr([
        //         'class' => 'nav-link',
        //     ]);


        //     // Submenu: Category Event - Index
        //     $category_event_submenu->add('<i class="nav-icon "></i> '.__('Detail Program'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])->data([
        //         'order' => 84,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])->link->attr([
        //         'class' => 'nav-link',
        //     ]);


        
        // // Subbmenu: Master Data - Form
        //     // Submenu: Posts
        //     $posts_submenu = $articles_menu->add('<i class="nav-icon fas fa-table"></i> '.__('Form Input'), [
        //         'class' => 'nav-item nav-group',
        //     ])
        //     ->data([
        //         'order' => 82,
        //         'activematches' => 'admin/posts*',
        //         'permission' => ['edit_posts'],
        //     ]);
        //     $posts_submenu->link->attr([    'class' => 'nav-link nav-group-toggle',    'href' => '#',]);
            
        //     // Submenu: Form Index
        //     $posts_submenu->add('<i class="nav-icon"></i> '.__('Form'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order' => 83,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
            
        //     // Submenu: Type Form Index
        //     $posts_submenu->add('<i class="nav-icon"></i> '.__('Type Form'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order' => 83,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
            
        //     // Submenu: Detail Type Form Index
        //     $posts_submenu->add('<i class="nav-icon"></i> '.__('Detail Type Form'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order' => 83,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);

            
        // // Subbmenu: Master Data - Form
        //     // Submenu: Posts<i class="fas fa-usd-circle"></i><i class="fas fa-money-bill-alt"></i>
        //     $posts_submenu = $articles_menu->add('<i class="nav-icon fas fa-money-bill-alt"></i> '.__('Price'), [
        //         'class' => 'nav-item nav-group',
        //     ])
        //     ->data([
        //         'order' => 82,
        //         'activematches' => 'admin/posts*',
        //         'permission' => ['edit_posts'],
        //     ]);
        //     $posts_submenu->link->attr([    'class' => 'nav-link nav-group-toggle',    'href' => '#',]);
            
        //     // Submenu: Form Index
        //     $posts_submenu->add('<i class="nav-icon "></i> '.__('Package'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order' => 83,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
            
        //     // Submenu: Type Form Index
        //     $posts_submenu->add('<i class="nav-icon "></i> '.__('Discount'), [
        //         'route' => 'backend.posts.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order' => 83,
        //         'activematches' => 'admin/posts/index',
        //         'permission' => ['edit_posts'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
                        
            
        // })->sortBy('order');

        return $next($request);
    }
}
