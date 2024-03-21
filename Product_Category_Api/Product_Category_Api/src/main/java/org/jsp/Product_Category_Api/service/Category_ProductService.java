package org.jsp.Product_Category_Api.service;

import java.util.List;
import java.util.Optional;

import org.jsp.Product_Category_Api.dao.CategoryProductDao;
import org.jsp.Product_Category_Api.dto.Category;
import org.jsp.Product_Category_Api.dto.Product;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class Category_ProductService {

	@Autowired
	private CategoryProductDao categoryProductDao;
	
	public Category saveCategory(Category category) {
		return categoryProductDao.saveCategory(category);
		
	}
	
	public Category updateCategory(Category category,int id) {
		return categoryProductDao.updateCategory(category, id);
	
}
	public Optional<Category> getCategoryByID(int id) {
		return categoryProductDao.getCategoryByID(id);
		
	}
	
	public List<Category> fetchCategory( ) {
		return categoryProductDao.fetchCategory();
		
	}
	
	public void deleteCategory( int id) {
		categoryProductDao.deleteCategory(id);
	}
	
	
	//Product APi
	
	public Product saveProduct(Product product) {
		return categoryProductDao.saveProduct(product);
		
	}
	
	public  Product updateProduct(Product product,int id) {
		return categoryProductDao.updateProduct(product, id);
		
	}
	
	public Optional<Product> getProductById(int id) {
		return categoryProductDao.getProductById(id);
		
	}
	
	public List<Product> fetchProduct() {
		return categoryProductDao.fetchProduct();
		
	}
	
	public void delProduct(int id) {
		categoryProductDao.deleteCategory(id);
		
	}
	

}
