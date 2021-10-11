import React, { Component } from 'react';
import { StyleSheet, Text, View, Image, TouchableOpacity, Linking } from 'react-native';
import { TextInput } from 'react-native-gesture-handler';

export default class LoginScreen extends React.Component{

    constructor(props) {
        super(props);
        this.state = {
          email : '',
          password : '',
          check_textInputChange : false,
          secureTextEntry : true,
        };
      }

      sign=()=>{
        alert('Contact Your Barangay or Use the Web Version to Create an Account')
      }
      
      InsertRecord=()=>{
        var email = this.state.email;
        var password = this.state.password;
    
        if ((email.length==0) || (password.length==0)){
          alert("Required Field Is Missing!!!");
        }else{
          var APIURL = 'http://10.0.2.2:80/MobileDB/BarangEYE/login.php';
    
          var headers = {
            'Accept' : 'application/json',
            'Content-Type' : 'application/json'
          };
                
          var Data ={
            email: email,
            password: password
          };
    
          fetch(APIURL,{
            method: 'POST',
            headers: headers,
            body: JSON.stringify(Data)
          })
          .then((Response)=>Response.json())
          .then((Response)=>{
            alert(Response[0].Message)
            if (Response[0].Message == "Success") {
              console.log("true")
              this.props.navigation.navigate("Dashboard", {Email: this.state.email});
            }
            console.log(Data);
          })
          .catch((error)=>{
            console.error("ERROR FOUND" + error);
          })
        }
      }
    
      updateSecureTextEntry(){
        this.setState({
          ...this.state,
          secureTextEntry: !this.state.secureTextEntry
        });
      }
    

    render(){
        return(
            <View style={styles.container}>
                <Text style={styles.welcome}>Welcome Back!</Text>
                <Text style={styles.continue}>Sign in to continue</Text>

                <TextInput style={styles.textField} 
                placeholderTextColor="#FFF" 
                placeholder="Email"
                onChangeText={email=>this.setState({email})}
                />

                <TextInput style={styles.textField} 
                placeholderTextColor="#FFF" 
                placeholder="Password" 
                secureTextEntry= {this.state.secureTextEntry ? true : false}
                onChangeText={password=>this.setState({password})}
                />

                <View style={styles.btnContainer}>
                    <TouchableOpacity 
                    onPress={() =>{this.InsertRecord()}} 
                    // onPress={() => this.props.navigation.navigate('Dashboard')}
                    style={styles.logBtn}>
                        <Text style={styles.logTxt}>Login Now</Text>
                    </TouchableOpacity>
                    <Text style={styles.forgot}>Forgot Password ?</Text>
                </View>

                <View style={styles.socView}>
                    <TouchableOpacity style={styles.fBtn} onPress={ ()=>{ Linking.openURL('https://www.facebook.com')}}>
                        <Text style={styles.socTxt}>f</Text>
                    </TouchableOpacity>
                    <TouchableOpacity style={styles.gBtn} onPress={ ()=>{ Linking.openURL('https://mail.google.com')}}>
                        <Text style={styles.socTxt}>G+</Text>
                    </TouchableOpacity>
                    <TouchableOpacity style={styles.noBtn}>
                        <Text style={styles.socTxt}>#</Text>
                    </TouchableOpacity>
                </View>

                <View style={{flexDirection: 'row', justifyContent: 'center', marginTop: 75}}>
                    <Text style={{color: '#FFF'}}>Don't have an account? </Text>
                  <TouchableOpacity onPress={this.sign}>
                    <Text style={{fontWeight: 'bold', color: '#FFF'}}> SIGN UP NOW!</Text>
                  </TouchableOpacity>
                </View>
            </View>
        )
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#485461',
        padding: 20
    },

    welcome: {
        fontWeight: 'bold', 
        fontSize: 25, 
        color: '#FFF', 
        marginTop: 20
    },

    continue: {
        fontSize: 16, 
        color: '#FFF',
        marginTop: 18
    },
    
    textField: {
        fontSize: 15, 
        color: '#FFF', 
        marginTop: 40, 
        borderBottomColor: '#ddd', 
        borderBottomWidth: 2, 
        paddingBottom: 15
    },

    btnContainer: {
        alignItems: 'center', 
        justifyContent: 'center', 
        marginTop: 50
    },

    logBtn: {
        width: 250, 
        backgroundColor: '#202b37', 
        padding: 10, 
        alignItems: 'center', 
        justifyContent: 'center', 
        borderRadius: 40, 
        marginTop: 30
    },

    logTxt: {
        textAlign: 'center', 
        color: '#FFF', 
        fontSize: 17
    },

    forgot: {
        color: '#FFF', 
        marginTop: 20
    },

    socView: { 
        alignItems: 'center', 
        justifyContent: 'center',
        flexDirection: 'row', 
        marginTop: 65 
    },

    socTxt: { 
        fontSize: 25, 
        fontWeight: 'bold', 
        color: '#FFF' 
    },

    fBtn: { 
        height: 40, 
        width: 40, 
        borderRadius: 40, 
        backgroundColor: '#757de8', 
        alignItems: 'center', 
        justifyContent: 'center' 
    },

    gBtn: { 
        height: 40, 
        width: 40, 
        borderRadius: 40, 
        backgroundColor: '#ff7961', 
        marginHorizontal: 12, 
        alignItems: 'center', 
        justifyContent: 'center' 
    },

    noBtn: { 
        height: 40, 
        width: 40, 
        borderRadius: 40, 
        backgroundColor: '#80e27e', 
        alignItems: 'center', 
        justifyContent: 'center' 
    }
});