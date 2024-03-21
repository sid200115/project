package org.jsp.Product_Category_Api.controller;

import java.util.List;
import java.util.Optional;

import org.jsp.Product_Category_Api.dto.Category;
import org.jsp.Product_Category_Api.dto.Product;
import org.jsp.Product_Category_Api.service.Category_ProductService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class Category_ProductController {
	
	@Autowired
	Category_ProductService service;
	
	@PostMapping("/save/category1")
	public Category saveCategory(@RequestBody Category category) {
		return service.saveCategory(category);
		
	}
	
	@PutMapping("/update/details/{id}")
	public Category updateCategory(@RequestBody Category category,@PathVariable int id) {
		return service.updateCategory(category, id);
	
}
	@GetMapping("/get/cdetails/{id}")
	public Optional<Category> getCategoryByID(@PathVariable int id) {
		return service.getCategoryByID(id);
		
	}
	
	@GetMapping("/fetch/category")
	public List<Category> fetchCategory( ) {
		return service.fetchCategory();
		
	}
	
	@DeleteMapping("/del/cat/{id}")
	public void deleteCategory(@PathVariable int id) {
		service.deleteCategory(id);
	}
	
	//Product Api
	
	@PostMapping("/create/pro")
	public Product saveProduct(@RequestBody Product product) {
		return service.saveProduct(product);
		
	}
	
	@PutMapping("/update/pro/{id}")
	public  Product updateProduct(@RequestBody Product product,@PathVariable int id) {
		return service.updateProduct(product, id);
		
	}
	
	@GetMapping("/get/pdetails/{id}")
	public Optional<Product> getProductById(@PathVariable int id) {
		return service.getProductById(id);
		
	}
	
	@GetMapping("/get/alldetails")
	public List<Product> fetchProduct() {
		return service.fetchProduct();
		
	}
	
	@DeleteMapping("/del/prod/{id}")
	public void delProduct(@PathVariable int id) {
		service.delProduct(id);
		
	}
	
	
}
