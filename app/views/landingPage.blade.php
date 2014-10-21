@extends('_master')

@section('title')
    Developer's Best Friend
@stop

@section('landingPageIntro')
Welcome to the Developer's Best Friend.  This site is intended for developers who need to generate filler text for their Web site or other projects.  Currently two tools are offered to generate text: a tool for paragraph text using Lorem Ipsum text, and a tool to generate fake users.
@stop

@section('bodyContent_1')
    This is a link to the lorem Ipsum Generator
    <br>
    <a href="/loremTool">Lorem Ipsum Generator</a> 
@stop

@section('bodyContent_2')
    This is a link to the Random User Generator
    <br>
    <a href="/generateUsers">Random User Generator</a> 
@stop
