package app.project.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import app.project.entities.Post;

public interface PostRepository  extends JpaRepository<Post, Long> {

}
