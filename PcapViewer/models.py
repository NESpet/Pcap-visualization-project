from sqlalchemy import Column, Integer, String, DateTime, ForeignKey, Float
from database import Base, db_session
from sqlalchemy.dialects.postgresql import JSON
from sqlalchemy.orm import relationship, backref

class Packet(Base):
    __tablename__ = 'Packet'
    id = Column(Integer, primary_key=True)
    hostSrc = Column(String(40))
    hostDest = Column(String(40))
    portSrc = Column(Integer)
    portDest = Column(Integer)
    protocol = Column(String(80))
    data = Column(JSON)
    timestamp = Column(DateTime)
    sessionId = Column(Integer, ForeignKey('Session.id'))
    session =  relationship('Session', backref=backref('posts', lazy='dynamic'))
    
    def __init__(self, hostSrc, hostDest, portSrc, portDest, protocol, data={}, timestamp=None, session=None):
        self.hostSrc = hostSrc
        self.hostDest = hostDest
        self.portSrc = portSrc
        self.portDest = portDest
        self.protocol = protocol
        self.data = data
        self.timestamp = timestamp
        self.session = session

    def __repr__(self):
        return '<Packet %s -> %s>' % (self.hostSrc, self.hostDest)

    def as_dict(self):
        return {
                'id':self.id,
                'hostSrc':self.hostSrc,
                'hostDest':self.hostDest,
                'portSrc':self.posrtSrc,
                'portDest':self.portDest,
                'protocol':self.protocol,
                'data':self.data,
                'timestamp':self.timestamp,
                'sessionId':self.session.id
                }

class Session(Base):
    __tablename__ = 'Session'
    id = Column(Integer, primary_key=True)
    hostSrc = Column(String(40))
    hostDest = Column(String(40))
    portSrc = Column(Integer)
    portDest = Column(Integer)
    protocol = Column(String(80))
    
    def __init__(self, hostSrc, hostDest, portSrc, portDest, protocol):
        self.hostSrc = hostSrc
        self.hostDest = hostDest
        self.portSrc = portSrc
        self.portDest = portDest
        self.protocol = protocol

    def __repr__(self):
        return '<Session %s -> %s>' % (self.hostSrc, self.hostDest)
        
    def as_dict(self):
        return {
                'id':self.id,
                'hostSrc':self.hostSrc,
                'hostDest':self.hostDest,
                'portSrc':self.portSrc,
                'portDest':self.portDest,
                'protocol':self.protocol
                }
        
class User(Base):
    __tablename__ = 'User'
    id = Column(Integer, primary_key=True)
    address = Column(String(40))
    exchanged = Column(JSON)
    
    def __init__(self, address, exchanged):
        self.address = address
        self.exchanged = exchanged
        
    def __repr__(self):
        return '<User %s>' % (self.address)
    
    def as_dict(self):
        return {
                'id':self.id,
                'address':self.address,
                'exchanged':self.exchanged
                }
        
    def treemap_layout(self):
        formatExchanged = []
        for key,value in self.exchanged['Protocole'].items():
            formatExchanged.append({'name':key, 'Volumeout':value['Volumeout'], 'Nombreout':value['Nombreout']})
        return {
               'id':self.id,
               'name':self.address,
               'children':formatExchanged
               }
        
class Stat(Base):
    __tablename__ = 'Stat'
    id = Column(Integer, primary_key=True)
    name = Column(String(80))
    value = Column(Integer)
    comment = Column(String(200))
    
    def __init__(self, name, value, comment=None):
        self.name = name
        self.value = value
        self.comment = comment
        
    def __repr__(self):
        return '%s' % (self.name)
    
    def as_dict(self):
        return {
                'id':self.id,
                'name':self.name,
                'value':self.value,
                'comment':self.comment
                }