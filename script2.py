import json
def main(param):
    originalvalue = param.get('originalvalue', 0)
    newvalue = originalvalue * 2
    return {'originalvalue': originalvalue,'newvalue': newvalue}