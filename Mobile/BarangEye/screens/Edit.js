import React, { Component } from 'react';
import { View, StyleSheet, Text, TouchableOpacity, ImageBackground, TextInput, Dimensions } from 'react-native';
import DropdownMenu from 'react-native-dropdown-menu';
import FontAwesome from 'react-native-vector-icons/FontAwesome';
import { ScrollView } from 'react-native-gesture-handler';

const { width, height } = Dimensions.get('screen');

export default class Edit extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
        text: '',
        };
        
    }
    render() {
        var data = [["Marital Status", "Married", "Unmarried"],["Voter Status", "Registered", "Unregistered"]];
        return (
            <View style={styles.container}>
                <View style={{ alignItems: 'center', width: '100%' }}>
                    <Text style={{ fontSize: 21, fontWeight: 'bold', marginVertical: 12 }}>Edit Profile</Text>
                </View>
                <View style={{ margin: 20 }}>
                    <View style={{ alignItems: 'center' }}>
                        <View style={{
                            height: 100,
                            width: 100,
                            borderRadius: 15,
                            justifyContent: 'center',
                            alignItems: 'center'
                        }}>
                            <ImageBackground
                                source={require('../assets/img/Dashboard/profile.png')}
                                style={{ width: 100, height: 100 }}
                                imageStyle={{ borderRadius: 15 }}>
                            </ImageBackground>
                        </View>
                        <Text style={{ marginTop: 10, fontSize: 18, fontWeight: 'bold' }}>
                            JOHN LAWRENCE TORRES
                        </Text>
                    </View>
                    <ScrollView style={{ marginTop: 5 }} contentContainerStyle={{paddingBottom: 420}}  scrollEnabled={false} showsVerticalScrollIndicator={false}>
                        <View style={styles.action}>
                            <FontAwesome name="user-o" size={25} />
                            <TextInput
                                placeholder="First Name"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        <View style={styles.action}>
                            <FontAwesome name="user-o" size={25} />
                            <TextInput
                                placeholder="Middle Name"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        <View style={styles.action}>
                            <FontAwesome name="user-o" size={25} />
                            <TextInput
                                placeholder="Last Name"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        <View style={styles.action}>
                            <FontAwesome name="phone" size={25} />
                            <TextInput
                                placeholder="Contact Number"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        <View style={styles.action}>
                            <FontAwesome name="map-marker" size={28} />
                            <TextInput
                                placeholder="Address"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        <View style={styles.action}>
                            <FontAwesome name="map-marker" size={28} />
                            <TextInput
                                placeholder="Address"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        <View style={styles.action}>
                            <DropdownMenu
                                style={{ flex: 0.5 }}
                                bgColor={'#fff'}
                                tintColor={'#000000'}
                                activityTintColor={'red'}
                                handler={(selection, row) => this.setState({ text: data[selection][row] })}
                                data={data}
                            ></DropdownMenu>
                        </View>
                        <View style={styles.action1}>
                            <TouchableOpacity style={styles.panelButton}>
                                <Text style={styles.panelButtonTitle}>SUBMIT</Text>
                            </TouchableOpacity>
                        </View>
                    </ScrollView>

                </View>
            </View>
        );
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    commandButton: {
        padding: 15,
        borderRadius: 10,
        backgroundColor: '#FF6347',
        alignItems: 'center',
        marginTop: 10,
    },
    panel: {
        padding: 20,
        backgroundColor: '#FFFFFF',
        paddingTop: 20,
        // borderTopLeftRadius: 20,
        // borderTopRightRadius: 20,
        // shadowColor: '#000000',
        // shadowOffset: {width: 0, height: 0},
        // shadowRadius: 5,
        // shadowOpacity: 0.4,
    },
    header: {
        backgroundColor: '#FFFFFF',
        shadowColor: '#333333',
        shadowOffset: { width: -1, height: -3 },
        shadowRadius: 2,
        shadowOpacity: 0.4,
        // elevation: 5,
        paddingTop: 20,
        borderTopLeftRadius: 20,
        borderTopRightRadius: 20,
    },
    panelHeader: {
        alignItems: 'center',
    },
    panelHandle: {
        width: 40,
        height: 8,
        borderRadius: 4,
        backgroundColor: '#00000040',
        marginBottom: 10,
    },
    panelTitle: {
        fontSize: 27,
        height: 35,
    },
    panelSubtitle: {
        fontSize: 14,
        color: 'gray',
        height: 30,
        marginBottom: 10,
    },
    panelButton: {
        padding: 13,
        borderRadius: 10,
        backgroundColor: '#FF6347',
        alignItems: 'center',
        marginVertical: 7,
    },
    panelButtonTitle: {
        fontSize: 17,
        fontWeight: 'bold',
        color: 'white',
    },
    action: {
        flexDirection: 'row',
        marginTop: 5,
        marginBottom: 10,
        borderBottomWidth: 1,
        borderBottomColor: '#f2f2f2',
        paddingBottom: 5,
    },
    action1: {
        justifyContent: 'center',
        marginTop: 5,
        marginBottom: 10,
        borderBottomWidth: 1,
        borderBottomColor: '#f2f2f2',
        paddingBottom: 5,
    },
    actionError: {
        flexDirection: 'row',
        marginTop: 10,
        borderBottomWidth: 1,
        borderBottomColor: '#FF0000',
        paddingBottom: 5,
    },
    textInput: {
        flex: 1,
        marginTop: -12,
        paddingLeft: 10,
        color: '#05375a',
        borderBottomWidth: 1
    },
});

