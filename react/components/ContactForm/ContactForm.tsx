import React from 'react';
import { FORM_FIELDS } from './constants';
import {
  Button,
  Heading2,
  Link,
  Text2,
  Input,
  TextArea,
  Checkbox,
  AttachFileButton,
  CloseButton,
} from 'src/ui-kit';
import {
  BracketLeftIcon,
  BracketRightIcon,
  MessageIcon,
} from 'src/assets/icons';

type ContactFormProps = {
  onClose?: () => void;
};

export const ContactForm: React.FC<ContactFormProps> = ({
  onClose,
}): JSX.Element => (
  <section className="h-full relative py-24 lg:flex lg:items-center scroll">
    <div className="max-w-full mx-auto flex items-center justify-center text-center relative ">
      <CloseButton
        className="absolute right-0 -top-[56px] 1xl:-top-[20px] "
        onClick={onClose}
      />
      <div className="self-start hidden lg:block my-12">
        <BracketLeftIcon className="h-[620px] w-auto" />
      </div>
      <div className="flex flex-col gap-9 lg:flex-row lg:justify-between lg:pl-8 lg:pr-12 lg:gap-12">
        <div className="w-full lg:w-[47%] 1xl:w-[39.9%] text-left">
          <Heading2
            className="text-h4"
            title="Don't let tech challenges hold you back"
          />
          <Text2
            className="text-x2-mob my-6 lg:mt-10 lg:mb-7"
            title="Send us a message with the details of your project and we'll schedule a discovery call with our founder, Yuriy Firs, to see if we are a mutual fit.
"
          />
          <Link className="text-link" title="Schedule a Call" href="#" />
        </div>
        <div className="w-full lg:w-[49%] 1xl:w-[54.93%] ">
          <form className="flex flex-col" action="#">
            <div className="flex flex-col">
              {FORM_FIELDS.map((inputType, index) => (
                <React.Fragment key={index}>
                  {inputType.tag === 'input' && <Input {...inputType} />}
                  {inputType.tag === 'textarea' && <TextArea {...inputType} />}
                </React.Fragment>
              ))}
            </div>
            <div className="flex flex-col xs:flex-row justify-between mt-4 tap-highlight select-none">
              <div className="w-full text-left xs:w-1/2 ">
                <AttachFileButton title="Attach file" />
              </div>
              <Checkbox label="I agree with the storage and handling of my data by this website in accordance with our Privacy Policy" />
            </div>
            <div className="flex justify-end mt-9 mb-24 lg:mb-0 lg:mt-4">
              <Button
                btnKind={'lg'}
                title={`Send Message`}
                icon={<MessageIcon />}
                iconPosition="right"
                className="flex"
              />
            </div>
          </form>
        </div>
      </div>
      <div className="self-start hidden lg:block my-12">
        <BracketRightIcon className="h-[620px] w-auto" />
      </div>
    </div>
  </section>
);
