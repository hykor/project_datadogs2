var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
const mongoose = require('mongoose');
const username = encodeURIComponent('wisit48140')
const password = encodeURIComponent('wisit@oE6eH!007')
const datadogs_usage = require('./routes/datadogs_usage');
const port = 3000

mongoose.Promise = global.Promise;
mongoose.connect(`mongodb://127.0.0.1:27017/DatadogOrgUsage?authMechanism=DEFAULT`,(err,client)=>{
// mongoose.connect(`mongodb+srv://${username}:${password}@cluster0.3omdfwf.mongodb.net/DatadogsOrgUsage?retryWrites=true&w=majority`,(err,client)=>{

})
      //  .then(() =>console.log('connection successfully!'))
      //  .catch((err) => console.error(err))

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');


var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/users', usersRouter);
app.use('/datadogs_usage', datadogs_usage)

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

app.listen(port, ()=> {
  console.log(`app listening on port ${port}!`)
})

module.exports = app;
