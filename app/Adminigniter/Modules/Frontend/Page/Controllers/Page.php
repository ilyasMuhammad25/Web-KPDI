<?php

namespace App\Adminigniter\Modules\Frontend\Page\Controllers;

class Page extends \hamkamannan\adminigniter\Controllers\BaseController
{
	public function index()
	{
		$this->detail();
	}

	public function figure()
	{
		$keyword = $this->request->getVar('keyword');
		$this->data['keyword'] = $keyword;

		$figureModel = new \App\Adminigniter\Modules\Backend\Figure\Models\FigureModel();
		$query = $figureModel->where('t_figure.active',1);
		$this->data['count_figures'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_figure.name', $keyword);
			$query->groupEnd();
			$this->data['count_figures'] = $query->countAllResults(false);
		} 

		$slug = $this->request->getVar('slug');
		if(!empty($slug)){
			$referenceModel = new \App\Adminigniter\Modules\Core\Reference\Models\ReferenceModel();
			$category = $referenceModel->where('slug',$slug)->get()->getRow();
			$this->data['category'] = $category;
			$query->where('t_figure.category_id',$category->id);
			$this->data['count_figures'] = $query->countAllResults(false);
		} 

		$figures = $query
			->select('t_figure.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_figure.category_id','left')
			->orderBy('created_at', 'desc')
			->paginate(6, 'figures');
		$pager = $query->pager;

		$this->data['figures'] = $figures;
		$this->data['pager_figures'] = $pager;
		$this->data['action'] = base_url('tokoh-wanita');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/figure/index';
		$this->data['title'] = 'Tokoh Wanita';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function figure_detail($slug)
	{
		$figureModel = new \App\Adminigniter\Modules\Backend\Figure\Models\FigureModel();

		$figure = $figureModel
			->select('t_figure.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_figure.category_id','left')
			->where('t_figure.slug', $slug)
			->row();

		$this->data['figure'] = $figure;
		$this->data['action'] = base_url('tokoh-wanita');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/figure/detail';
		$this->data['title'] = 'Detail | Tokoh Wanita ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function search()
	{
		$keyword = $this->request->getVar('keyword');
		$this->data['keyword'] = $keyword;

		$bookModel = new \App\Adminigniter\Modules\Backend\Book\Models\BookModel();
		$query = $bookModel->where('active', 1);
		$this->data['count_books'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_book.title', $keyword);
			$query->orLike('t_book.author', $keyword);
			$query->orLike('t_book.subject', $keyword);
			$query->groupEnd();
			$this->data['count_books'] = $query->countAllResults(false);
		}

		$books = $query
			->select('t_book.*')
			->orderBy('created_at', 'desc')
			->paginate(6, 'books');
		$pager = $query->pager;

		$this->data['books'] = $books;
		$this->data['pager_books'] = $pager;

		$researchModel = new \App\Adminigniter\Modules\Backend\Research\Models\ResearchModel();
		$query = $researchModel->where('active',1);
		$this->data['count_researchs'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_research.title', $keyword);
			$query->orLike('t_research.author', $keyword);
			$query->orLike('t_research.subject', $keyword);
			$query->groupEnd();
			$this->data['count_researchs'] = $query->countAllResults(false);
		} 

		$researchs = $query
			->select('t_research.*')
			->orderBy('created_at', 'desc')
			->paginate(6, 'researchs');
		$pager = $query->pager;

		$this->data['researchs'] = $researchs;
		$this->data['pager_researchs'] = $pager;

		$articleModel = new \App\Adminigniter\Modules\Backend\Article\Models\ArticleModel();
		$query = $articleModel->where('active',1);
		$this->data['count_articles'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_article.title', $keyword);
			$query->orLike('t_article.author', $keyword);
			$query->orLike('t_article.subject', $keyword);
			$query->groupEnd();
			$this->data['count_articles'] = $query->countAllResults(false);
		} 

		$articles = $query
			->select('t_article.*')
			->orderBy('created_at', 'desc')
			->paginate(6, 'articles');
		$pager = $query->pager;

		$this->data['articles'] = $articles;
		$this->data['pager_articles'] = $pager;

		$this->data['action'] = base_url('search');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/search';
		$this->data['title'] = 'Pencarian ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function book()
	{
		$keyword = $this->request->getVar('keyword');

		$bookModel = new \App\Adminigniter\Modules\Backend\Book\Models\BookModel();
		$query = $bookModel->where('active',1);
		$this->data['count_books'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_book.title', $keyword);
			$query->orLike('t_book.author', $keyword);
			$query->orLike('t_book.subject', $keyword);
			$query->groupEnd();
			$this->data['count_books'] = $query->countAllResults(false);
		} 

		$books = $query
			->select('t_book.*')
			->orderBy('created_at', 'desc')
			->paginate(6, 'books');
		$pager = $query->pager;

		$this->data['books'] = $books;
		$this->data['pager'] = $pager;
		$this->data['action'] = base_url('buku');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/book/index';
		$this->data['title'] = 'Karya Tulis | Buku ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function book_detail($slug)
	{
		$bookModel = new \App\Adminigniter\Modules\Backend\Book\Models\BookModel();

		$book = $bookModel
			->select('t_book.*')
			->where('t_book.slug', $slug)
			->row();

		$this->data['book'] = $book;
		$this->data['action'] = base_url('buku');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/book/detail';
		$this->data['title'] = 'Karya Tulis | Buku ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function research()
	{
		$keyword = $this->request->getVar('keyword');

		$researchModel = new \App\Adminigniter\Modules\Backend\Research\Models\ResearchModel();
		$query = $researchModel->where('active',1);
		$this->data['count_researchs'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_research.title', $keyword);
			$query->orLike('t_research.author', $keyword);
			$query->orLike('t_research.subject', $keyword);
			$query->groupEnd();
			$this->data['count_researchs'] = $query->countAllResults(false);
		} 

		$researchs = $query
			->select('t_research.*')
			->orderBy('created_at', 'desc')
			->paginate(6, 'researchs');
		$pager = $query->pager;

		$this->data['researchs'] = $researchs;
		$this->data['pager'] = $pager;
		$this->data['action'] = base_url('karya-ilmiah');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/research/index';
		$this->data['title'] = 'Karya Tulis | Karya Ilmiah ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function research_detail($slug)
	{
		$researchModel = new \App\Adminigniter\Modules\Backend\Research\Models\ResearchModel();

		$research = $researchModel
			->select('t_research.*')
			->where('t_research.slug', $slug)
			->row();

		$this->data['research'] = $research;
		$this->data['action'] = base_url('karya-ilmiah');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/research/detail';
		$this->data['title'] = 'Karya Tulis | Buku ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function article()
	{
		$keyword = $this->request->getVar('keyword');

		$articleModel = new \App\Adminigniter\Modules\Backend\Article\Models\ArticleModel();
		$query = $articleModel->where('active',1);
		$this->data['count_articles'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_article.title', $keyword);
			$query->orLike('t_article.author', $keyword);
			$query->orLike('t_article.subject', $keyword);
			$query->groupEnd();
			$this->data['count_articles'] = $query->countAllResults(false);
		} 

		$articles = $query
			->select('t_article.*')
			->orderBy('created_at', 'desc')
			->paginate(6, 'articles');
		$pager = $query->pager;

		$this->data['articles'] = $articles;
		$this->data['pager'] = $pager;
		$this->data['action'] = base_url('artikel');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/article/index';
		$this->data['title'] = 'Karya Tulis | Artikel ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function article_detail($slug)
	{
		$articleModel = new \App\Adminigniter\Modules\Backend\Article\Models\ArticleModel();

		$article = $articleModel
			->select('t_article.*')
			->where('t_article.slug', $slug)
			->row();

		$this->data['article'] = $article;
		$this->data['action'] = base_url('artikel');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/article/detail';
		$this->data['title'] = 'Karya Tulis | Buku ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function picture()
	{
		$keyword = $this->request->getVar('keyword');
		$this->data['keyword'] = $keyword;

		$pictureModel = new \App\Adminigniter\Modules\Backend\Picture\Models\PictureModel();
		$query = $pictureModel->where('t_picture.active','1');
		$this->data['count_pictures'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_picture.title', $keyword);
			$query->groupEnd();
			$this->data['count_pictures'] = $query->where('active',1)->countAllResults(false);
		} 

		$slug = $this->request->getVar('slug');
		if(!empty($slug)){
			$referenceModel = new \App\Adminigniter\Modules\Core\Reference\Models\ReferenceModel();
			$category = $referenceModel->where('slug',$slug)->get()->getRow();
			$this->data['category'] = $category;
			$query->where('t_picture.category_id',$category->id);
			$this->data['count_pictures'] = $query->where('active',1)->countAllResults(false);
		} 

		$pictures = $query
			->select('t_picture.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_picture.category_id','left')
			->orderBy('t_picture.created_at', 'desc')
			->paginate(6, 'pictures');
		$pager = $query->pager;

		$this->data['pictures'] = $pictures;
		$this->data['pager_pictures'] = $pager;
		$this->data['action'] = base_url('koleksi-gambar');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/picture/index';
		$this->data['title'] = 'Koleksi Gambar';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function picture_detail($slug)
	{
		$pictureModel = new \App\Adminigniter\Modules\Backend\Picture\Models\PictureModel();

		$picture = $pictureModel
			->select('t_picture.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_picture.category_id','left')
			->where('t_picture.slug', $slug)
			->row();

		$this->data['picture'] = $picture;
		$this->data['action'] = base_url('koleksi-gambar');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/picture/detail';
		$this->data['title'] = 'Detail | Koleksi Gambar ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function record()
	{
		$keyword = $this->request->getVar('keyword');
		$this->data['keyword'] = $keyword;

		$recordModel = new \App\Adminigniter\Modules\Backend\Record\Models\RecordModel();
		$query = $recordModel->where('t_record.active',1);
		$this->data['count_records'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_record.title', $keyword);
			$query->groupEnd();
			$this->data['count_records'] = $query->countAllResults(false);
		} 

		$slug = $this->request->getVar('slug');
		if(!empty($slug)){
			$referenceModel = new \App\Adminigniter\Modules\Core\Reference\Models\ReferenceModel();
			$category = $referenceModel->where('slug',$slug)->get()->getRow();
			$this->data['category'] = $category;
			$query->where('t_record.category_id',$category->id);
			$this->data['count_records'] = $query->countAllResults(false);
		} 

		$records = $query
			->select('t_record.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_record.category_id','left')
			->orderBy('t_record.created_at', 'desc')
			->paginate(6, 'records');
		$pager = $query->pager;

		$this->data['records'] = $records;
		$this->data['pager_records'] = $pager;
		$this->data['action'] = base_url('koleksi-rekaman');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/record/index';
		$this->data['title'] = 'Koleksi Gambar';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function record_detail($slug)
	{
		$recordModel = new \App\Adminigniter\Modules\Backend\Record\Models\RecordModel();

		$record = $recordModel
			->select('t_record.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_record.category_id','left')
			->where('t_record.slug', $slug)
			->row();

		$this->data['record'] = $record;
		$this->data['action'] = base_url('koleksi-rekaman');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/record/detail';
		$this->data['title'] = 'Detail | Koleksi Gambar ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function organization()
	{
		$keyword = $this->request->getVar('keyword');
		$this->data['keyword'] = $keyword;

		$organizationModel = new \App\Adminigniter\Modules\Backend\Organization\Models\OrganizationModel();
		$query = $organizationModel->where('t_organization.active',1);
		$this->data['count_organizations'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_organization.name', $keyword);
			$query->groupEnd();
			$this->data['count_organizations'] = $query->countAllResults(false);
		} 

		$slug = $this->request->getVar('slug');
		if(!empty($slug)){
			$referenceModel = new \App\Adminigniter\Modules\Core\Reference\Models\ReferenceModel();
			$category = $referenceModel->where('slug',$slug)->get()->getRow();
			$this->data['category'] = $category;
			$query->where('t_organization.category_id',$category->id);
			$this->data['count_organizations'] = $query->countAllResults(false);
		} 

		$organizations = $query
			->select('t_organization.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_organization.category_id','left')
			->orderBy('sort', 'asc')
			->paginate(6, 'organizations');
		$pager = $query->pager;

		$this->data['organizations'] = $organizations;
		$this->data['pager_organizations'] = $pager;
		$this->data['action'] = base_url('organisasi');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/organization/index';
		$this->data['title'] = 'Koleksi Gambar';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function organization_detail($slug)
	{
		$organizationModel = new \App\Adminigniter\Modules\Backend\Organization\Models\OrganizationModel();

		$organization = $organizationModel
			->select('t_organization.*')
			->select('c_references.name as category_name, c_references.slug as category_slug')
			->join('c_references','c_references.id = t_organization.category_id','left')
			->where('t_organization.slug', $slug)
			->row();

		$this->data['organization'] = $organization;
		$this->data['action'] = base_url('organisasi');

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/organization/detail';
		$this->data['title'] = 'Detail | Koleksi Gambar ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function history_before()
	{
		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/history/before';
		$this->data['title'] = 'Sejarah Perjuangan | Pra Kemerdekaan ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function history_after()
	{
		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/history/after';
		$this->data['title'] = 'Sejarah Perjuangan | Pra Kemerdekaan ';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function detail()
	{
		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/detail';
		$this->data['slug'] =  $this->request->getVar('slug');
		$this->data['category'] =  ucfirst($this->request->uri->getSegment(1));
		$this->data['title'] = 'Detail';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function blog()
	{
		$slug = $this->request->getVar('slug');
		$keyword = $this->request->getVar('keyword');

		$blogModel = new \App\Adminigniter\Modules\Backend\Blog\Models\BlogModel();
		$blogCategoryModel = new \App\Adminigniter\Modules\Backend\Blog\Models\BlogCategoryModel();

		$query = $blogModel
			->select('t_blog.*, t_blog_category.name as category_name')
			->join('t_blog_category', 't_blog_category.id=t_blog.blog_category_id', 'left')
			->where('active', '1');
		
		if(!empty($slug)){
			$category = $blogCategoryModel->where('slug',$slug)->get()->getRow();
			$this->data['category'] = $category;
			$query->where('t_blog.blog_category_id',$category->id);
		}

		// if(!empty($category)){
		// 	$query->where('t_blog.blog_category_id',$category);
		// }

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_blog.title', $keyword);
			// $query->orLike('t_blog_category.name', $keyword);
			$query->groupEnd();
		}

		$blogs = $query
			->where('active',1)
			->orderBy('created_at', 'desc')
			->paginate(5, 'blogs');
		$pager = $blogModel->pager;
		$counts = count($blogModel->findAll());
		$categories = $blogCategoryModel->findAll();
		
		$this->data['keyword'] = $keyword;
		$this->data['slug'] = $slug;
		$this->data['blogs'] = $blogs;
		$this->data['categories'] = $categories;
		$this->data['pager'] = $pager;
		$this->data['counts'] = $counts;
		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/blog/index';
		$this->data['title'] = 'Artikel';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function blog_detail($id = null)
	{
		$blogModel = new \App\Adminigniter\Modules\Backend\Blog\Models\BlogModel();
		$blogCategoryModel = new \App\Adminigniter\Modules\Backend\Blog\Models\BlogCategoryModel();

		$query = $blogModel->select('t_blog.*, t_blog_category.name as category_name')
		->join('t_blog_category', 't_blog_category.id = t_blog.blog_category_id', 'left')
		->where('active', '1');

		$blog = $query->find($id);
		$categories = $blogCategoryModel->findAll();

		$blogModel->update($id, array('viewers' => $blog->viewers + 1));

		$this->data['blog'] = $blog;
		$this->data['categories'] = $categories;
		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/blog/detail';
		$this->data['title'] = 'Detail Artikel';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function flip()
	{
		$file = base_url();

		if(!empty($this->request->getVar('path'))){
			$file .= '/' .$this->request->getVar('path');
		} else {
			$file .= '/uploads';
		}

		if(!empty($this->request->getVar('file'))){
			$file .= '/' .$this->request->getVar('file');
		} else {
			$file .= '/PDF.pdf';
		}

		// $file = base_url('uploads/PDF.pdf'); // for sample

		$this->data['file'] = $file;
		echo view('layout/backend/flip', $this->data);
	}

	public function faq()
	{
		$faqModel = new \App\Adminigniter\Modules\Backend\Faq\Models\FaqModel();
		$faqs = $faqModel
			->where('active',1)
			->orderBy('sort', 'ASC')
			->findAll();
		$this->data['faqs'] = $faqs;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/faq/index';
		$this->data['title'] = 'FAQs';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function contact()
	{
		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/contact/index';
		$this->data['title'] = 'Kontak';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function gallery()
	{
		$faqs = $this->faqModel
			->where('active',1)
			->orderBy('sort', 'ASC')
			->findAll();
		$this->data['faqs'] = $faqs;

		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/section/gallery';
		$this->data['title'] = 'Galeri';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}
}
