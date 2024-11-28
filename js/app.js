const express = require('express');
const app = express();

// Dummy blog data
const blogs = [
  { id: 1, title: "Blog 1", image: "image1.jpg", content: "Content of blog 1." },
  { id: 2, title: "Blog 2", image: "image2.jpg", content: "Content of blog 2." },
];

// API endpoint to fetch all posts
app.get('/api/posts', (req, res) => {
  res.json(blogs.map(blog => ({ id: blog.id, title: blog.title, image: blog.image })));
});

// API endpoint to fetch a single blog
app.get('/api/posts/:id', (req, res) => {
  const blog = blogs.find(b => b.id == req.params.id);
  if (blog) res.json(blog);
  else res.status(404).send('Blog not found');
});

// Start the server
app.listen(3000, () => console.log('Server running on http://localhost:3000'));
