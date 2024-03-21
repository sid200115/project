package org.jsp.Product_Category_Api.dao;


import java.util.List;
import java.util.Optional;

import org.jsp.Product_Category_Api.dto.Category;
import org.jsp.Product_Category_Api.dto.Product;
import org.jsp.Product_Category_Api.repository.CategoryRepository;
import org.jsp.Product_Category_Api.repository.ProductRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

@Repository
public class CategoryProductDao {
	
		@Autowired
		private CategoryRepository categoryRepository;
		
		@Autowired
		private ProductRepository productRepository;
		
		
		//Category Api
		
		public Category saveCategory(Category category) {
			return categoryRepository.save(category);
			
		}
		
		public Category updateCategory(Category category,int id) {
				return categoryRepository.save(category);
			
		}
		
		public Optional<Category> getCategoryByID(int id) {
			return categoryRepository.findById(id);
			
		}
		
		public List<Category> fetchCategory( ) {
			return categoryRepository.findAll();
			
		}
		
		public void deleteCategory( int id) {
			categoryRepository.deleteById(id);
		}
	
		//Product APi
		
		public Product saveProduct(Product product) {
			return productRepository.save(product);
			
		}
		
		public  Product updateProduct(Product product,int id) {
			return productRepository.save(product);
			
		}
		
		public Optional<Product> getProductById(int id) {
			return productRepository.findById(id);
			
		}
		
		public List<Product> fetchProduct() {
			return productRepository.findAll();
			
		}
		
		public void delProduct(int id) {
			productRepository.deleteById(id);
			
		}
}
